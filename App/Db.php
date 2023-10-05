<?php
class Db {
    private $host = 'localhost';
    private $usuario = 'root';
    private $contrasena = '';
    private $dbnombre = 'productosportfolio';
    private $conexion;

    public function conectar() {
        try {
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->dbnombre}", $this->usuario, $this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'db conectada';
            return $this->conexion;
        } catch (PDOException $e) {
            die("Error en la conexión a la base de datos: " . $e->getMessage());
        }
    }
}
?>
