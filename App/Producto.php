<?php
class Producto {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerProductos() {
        try {
            $conexion = $this->db->conectar();
            $query = "SELECT * FROM productos";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $productos;
        } catch (PDOException $e) {
            die("Error al obtener productos: " . $e->getMessage());
        }
    }

    public function mostrarProductos() {
        $productos = $this->obtenerProductos();
       
        include '../index.php';
    }
}
?>
