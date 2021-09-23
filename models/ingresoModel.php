<?php
require_once("./database/db.php"); //establecer conexion con la base de datos

class IngresoModel
{

    private $db;

    // abrir conexion base de datos 
    function abrir_conexion()
    {
        $this->db = Conectar::conexion();
    }

    // cerrar conexion base de datos 
    function cerrar_conexion()
    {
        mysqli_close($this->db);
    }

    // Crud de ingresos 
    function AddIngreso($data)
    {
        $this->abrir_conexion();

        $id = $data['id'];
        $name = $data['valor'];

        $sql = "INSERT INTO ingresos(meta_id,ingreso_valor) VALUES ('$id','$name')";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Datos insertados correctamente";
        } else {
            $msj = "error en la insercion " . mysqli_error($this->db);
        }

        return $msj;

        $this->cerrar_conexion();
    }


    function GetIngresos($id)
    {
        $this->abrir_conexion();
        $datos = array();
        $sql        = "SELECT * FROM ingresos where meta_id = '{$id}' ";
        $resultado  = mysqli_query($this->db, $sql);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }

        return $datos;
        $this->cerrar_conexion();
    }

    function GetIngresoPorId($id)
    {
        $this->abrir_conexion();
        $sql        = "SELECT * FROM ingresos where ingreso_id = '$id'";
        $resultado  = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($resultado);
        return $row;
        $this->cerrar_conexion();
    }

    function GetMetaByIngresoId($id)
    {
        $this->abrir_conexion();
        $sql        = "SELECT * FROM ingresos where ingreso_id = '$id'";
        $resultado  = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($resultado);
        return $row;
        $this->cerrar_conexion();
    }

    function DeleteIngresoPorId($id)
    {
        $this->abrir_conexion();
        $sql = "DELETE FROM ingresos WHERE ingreso_id ='$id'";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Usuario eliminado satisfactoriamente";
        } else {
            $msj = "error en la eliminacion " . mysqli_error($this->db);
        }
        return $msj;
        $this->cerrar_conexion();
    }

    
    

}
