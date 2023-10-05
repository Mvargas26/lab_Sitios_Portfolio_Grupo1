<?php
class Db {
    private $host = 'localhost';
    private $usuario = 'gonar';
    private $contrasena = 'gonar070911#';
    private $dbnombre = 'tiusr29pl_LaboratorioPortafolioGrupo1';
    private $conexion;

    public function conectar() {
        try {
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->dbnombre}", $this->usuario, $this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'db conectada';
            return $this->conexion;
        } catch (PDOException $e) {
            die("Error en la conexión a la base de datos: " . $e->getMessage());
        }
    }
}
?>
