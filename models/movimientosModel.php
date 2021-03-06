<?php
require_once("./database/db.php"); //establecer conexion con la base de datos

class MovimientosModel
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

    // metodos crud 
    function AddMovimiento($data)
    {
        $this->abrir_conexion();

        $name = $data['meta'];
        $tope = $data['tope'];

        $sql = "INSERT INTO metas(meta_nombre,tope) VALUES ('$name','$tope')";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Datos insertados correctamente";
        } else {
            $msj = "error en la insercion " . mysqli_error($this->db);
        }

        return $msj;

        $this->cerrar_conexion();
    }

    function GetMovimiento()
    {
        $this->abrir_conexion();
        $sql        = "SELECT * FROM metas order by meta_id";
        $resultado  = mysqli_query($this->db, $sql);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }

        return $datos;
        $this->cerrar_conexion();
    }

    function GetMovimientoPorId($id)
    {
        $this->abrir_conexion();
        $sql        = "SELECT * FROM metas where meta_id = '{$id}'";
        $resultado  = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($resultado);
        return $row;
        $this->cerrar_conexion();
    }

    function DeleteMovimiento($id)
    {
        $this->abrir_conexion();

        $sql = "DELETE FROM metas WHERE meta_id ='$id'";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Usuario eliminado satisfactoriamente";
        } else {
            $msj = "error en la eliminacion " . mysqli_error($this->db);
        }

        $this->cerrar_conexion();
        return $msj;
    }

    function UpdateMovimiento($data)
    {


        $id = $data['id'];
        $meta = $data['meta'];
        $tope = $data['tope'];


        $this->abrir_conexion();

        $sql = "UPDATE metas set meta_nombre = '$meta' , tope = '$tope' WHERE meta_id = '$id'";

        if (mysqli_query($this->db, $sql)) {
            $msj = "usuario actualizado correctamente";
        } else {
            $msj = "error en la actualizacion " . mysqli_error($this->db);
        }

        return $msj;
        $this->cerrar_conexion();
    }
}
