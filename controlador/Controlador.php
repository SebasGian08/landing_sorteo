<?php

require_once __DIR__ . '/../modelo/Modelo.php';

class Controlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function manejarSolicitud($tipoVista) {
        // Manejo de solicitudes POST para registro
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->guardarDatosApi();
            return; 
        }

        // Verifica si se está solicitando obtener participantes
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['accion']) && $_GET['accion'] === 'obtener_participantes') {
            $this->obtenerParticipantes();
            return; // Termina la ejecución después de manejar la solicitud de participantes
        }

        // Manejo de vistas
        $this->manejarVista($tipoVista);
    }



    private function manejarVista($tipoVista) {
        // Manejo de vistas según el tipo solicitado
        switch ($tipoVista) {
            case 'landing_registroSorteo':
                include __DIR__ . '/../vista/landing_registroSorteo.php';
                break;
            case 'sorteo_ial_2024':
                include __DIR__ . '/../vista/sorteo_ial_2024.php';
                break;
            default:
                include __DIR__ . '/../vista/notfound.php';
                break;
        }
    }


    /* Obtener para sorteo */
    private function obtenerParticipantes() {
        try {
            header('Content-Type: application/json');
    
            $cantidad = isset($_GET['cantidad']) ? intval($_GET['cantidad']) : 0;
    
            if ($cantidad > 0) {
                $participantes = $this->modelo->obtenerParticipantes($cantidad);
                if (!empty($participantes)) {
                    echo json_encode($participantes);
                } else {
                    echo json_encode(['error' => 'No se encontraron participantes.']);
                }
            } else {
                echo json_encode(['error' => 'Cantidad no válida.']);
            }
        } catch (Exception $e) {
            echo json_encode(['error' => 'Error en el servidor: ' . $e->getMessage()]);
        }
    
        exit;
    }


    /* Api */
    public function guardarDatosApi() {
    // Asegúrate de que los datos se reciban como JSON
    $data = json_decode(file_get_contents('php://input'), true);

    // Verifica que se hayan recibido todos los campos necesarios
    if (isset($data['nombre'], $data['apellido'], $data['telefono'], $data['dni'], $data['correo'], $data['cod_espe'], $data['tipo'])) {
        $cod_alumno = $data['cod_alumno'] ?? null; // Si cod_alumno no es necesario, se puede omitir
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $telefono = $data['telefono'];
        $dni = $data['dni'];
        $correo = $data['correo'];
        $cod_espe = $data['cod_espe'];
        $tipo = $data['tipo'];

        // Llama a la función para enviar los datos
        $response = $this->enviarDatos($cod_alumno, $nombre, $apellido, $telefono, $dni, $correo, $cod_espe, $tipo);
        
        // Devuelve la respuesta como JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Manejo de error
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['error' => 'Faltan datos requeridos']);
    }
}

private function enviarDatos($cod_alumno, $nombre, $apellido, $telefono, $dni, $correo, $cod_espe, $tipo) {
    $urlServidorSecundario = "https://istalcursos.edu.pe/apiSiga/nuevoParticipanteSorteo";
    $solicitud = curl_init();
    
    $data = [
        'cod_alumno' => $cod_alumno,
        'nombre' => $nombre,
        'apellido' => $apellido,
        'telefono' => $telefono,
        'dni' => $dni,
        'correo' => $correo,
        'cod_espe' => $cod_espe,
        'tipo' => $tipo
    ];
    
    curl_setopt_array($solicitud, array(
        CURLOPT_URL => $urlServidorSecundario,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_SSL_VERIFYPEER => false
    ));
    
    $response = curl_exec($solicitud);
    $err = curl_error($solicitud);
    curl_close($solicitud);
    
    if ($err) {
        return ['error' => "cURL Error #: " . $err];
    } else {
        return json_decode($response, true);
    }
}
/* Fin api */
    
    
}