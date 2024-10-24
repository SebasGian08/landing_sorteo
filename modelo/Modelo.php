<?php
class Modelo {
    private $datos = [];
    private $conn;

    public function __construct() {
        // Conectar a la base de datos
        /* $this->conn = new mysqli('localhost', 'root', '', 'ial_landingpfc'); */
        $this->conn = new mysqli('localhost', 'root', '', 'registro_sorteo');

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function insertarDatos($nom, $ape, $dni, $tel, $email, $carrera) {
        $stmt = $this->conn->prepare("INSERT INTO registro (nom, ape, dni, tel, email, carrera) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("enviodedatos", $nom, $ape, $dni, $tel, $email, $carrera);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
        $stmt->close();
    }

    public function obtenerParticipantes($cantidad) {
        $stmt = $this->conn->prepare("SELECT nom, ape FROM registro ORDER BY RAND() LIMIT ?");
        $stmt->bind_param("i", $cantidad); // Asegúrate de que esto esté correcto
        $stmt->execute();
        
        $result = $stmt->get_result();
        $participantes = [];
    
        while ($row = $result->fetch_assoc()) {
            $participantes[] = $row['nom'] . ' ' . $row['ape'];
        }
    
        $stmt->close();
    
        // Agrega un log para ver qué se está devolviendo
        error_log("Participantes obtenidos: " . json_encode($participantes));
    
        return $participantes; // Asegúrate de que no sea null
    }
    

    public function __destruct() {
        $this->conn->close();
    }
}

?>