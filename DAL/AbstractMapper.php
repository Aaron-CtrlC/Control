<?php
abstract class AbstractMapper
{
    private $usuario = "root";
    private $contrasena = "//*(Neos2739)*//";
    private $servidor = "localhost:3306";
    private $basededatos = "control";

    /*PRUEBA N */
    private $conexion;
    protected $consulta;

    public function setConsulta($consulta)
    {
        $this->consulta = $consulta;
    }

    public function Execute()
    {
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasena) or die("Error al conectar: ");
        mysqli_set_charset($conexion, 'utf8');
        $baseDatos = mysqli_select_db($conexion, $this->basededatos) or die("Error seleccionar la BD : ");

        mysqli_query($conexion, $this->consulta);
        $id = mysqli_insert_id($conexion);
        mysqli_close($conexion);
        return $id;
    }

    public function FindAll()
    {
        $registros = array();
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasena) or die("Error al conectar: ");
        mysqli_set_charset($conexion, 'utf8');
        $baseDatos = mysqli_select_db($conexion, $this->basededatos) or die("Error seleccionar la BD : ");
        $resultado = mysqli_query($conexion, $this->consulta);



        $registros = $this->LoadAll($resultado);
        mysqli_close($conexion);
        return $registros;
    }

    public function Find(): mixed
    {
        $objeto = new stdClass();
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasena) or die("Error al conectar: ");
        mysqli_set_charset($conexion, 'utf8');
        $baseDatos = mysqli_select_db($conexion, $this->basededatos) or die("Error seleccionar la BD : ");
        $resultado = mysqli_query($conexion, $this->consulta);
        while ($columna = mysqli_fetch_array($resultado)) {
            $objeto = $this->doLoad($columna);
        }
        mysqli_close($conexion);

        return $objeto;
    }



    private function LoadAll($resultado)
    {
        $registros = array();

        while ($columna = mysqli_fetch_array($resultado)) {
            $registros[] = $this->doLoad($columna);
        }

        return $registros;
    }

    abstract protected function doLoad($columna);
}
