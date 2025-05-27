<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once 'config.php';

try {
    // Verificar que sea una petición POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Método no permitido');
    }

    // Obtener datos del cuerpo de la petición
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!isset($input['codigo_qr']) || empty($input['codigo_qr'])) {
        throw new Exception('Código QR requerido');
    }

    $codigo_qr = trim($input['codigo_qr']);
    $supabase = new SupabaseClient();

    // Buscar el usuario por código QR
    $usuarios = $supabase->select('usuarios', '*', 'codigo_qr=eq.' . $codigo_qr);
    
    if (empty($usuarios)) {
        echo json_encode([
            'success' => false,
            'mensaje' => 'Código QR no válido'
        ]);
        exit;
    }

    $usuario = $usuarios[0];
    $fecha_hoy = date('Y-m-d');

    // Verificar si ya registró asistencia hoy
    $asistencia_existente = $supabase->select(
        'asistencias', 
        '*', 
        'usuario_id=eq.' . $usuario['id'] . '&fecha=eq.' . $fecha_hoy
    );

    if (!empty($asistencia_existente)) {
        echo json_encode([
            'success' => false,
            'mensaje' => 'Ya registraste tu asistencia hoy a las ' . 
                       date('H:i:s', strtotime($asistencia_existente[0]['hora_llegada']))
        ]);
        exit;
    }

    // Registrar nueva asistencia
    $nueva_asistencia = [
        'usuario_id' => $usuario['id'],
        'estatus' => 'Presente',
        'fecha' => $fecha_hoy,
        'hora_llegada' => date('Y-m-d H:i:s') // Agregar hora_llegada
    ];

    $resultado = $supabase->insert('asistencias', $nueva_asistencia);

    echo json_encode([
        'success' => true,
        'mensaje' => 'Asistencia registrada correctamente para ' . $usuario['nombre'] . ' ' . $usuario['apellido'],
        'datos' => [
            'usuario' => $usuario['nombre'] . ' ' . $usuario['apellido'],
            'ocupacion' => $usuario['ocupacion'],
            'hora' => date('H:i:s')
        ]
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'mensaje' => 'Error: ' . $e->getMessage()
    ]);
}
?>