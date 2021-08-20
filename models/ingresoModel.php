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

    function ingresoCreate($data)
    {
        $this->abrir_conexion();

        $name = $data['valor'];
        $id = $data['id'];

        $sql = "INSERT INTO ingresos(meta_id,ingreso_valor) VALUES ('$id','$name')";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Datos insertados correctamente";
        } else {
            $msj = "error en la insercion " . mysqli_error($this->db);
        }

        return $msj;

        $this->cerrar_conexion();
    }

    function GetMeta($id)
    {
        $this->abrir_conexion();
        $sql        = "SELECT * FROM metas where meta_id = '{$id}'";
        $resultado  = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($resultado);
        return $row;
        $this->cerrar_conexion();
    }

    function MetaList()
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




    function MetaDelete($codigo)
    {
        $this->abrir_conexion();
        $sql = "DELETE FROM ofertas WHERE id_oferta ='$codigo'";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Usuario eliminado satisfactoriamente";
        } else {
            $msj = "error en la eliminacion " . mysqli_error($this->db);
        }

        mysqli_close($this->db);

        $this->cerrar_conexion();
        return $msj;
    }

    function MetaUpdate($id, $data)
    {

        $id = $id;
        $nombre = $data[0]['nombre'];
        $descripcion = $data[0]['descripcion'];



        $sql = "UPDATE ofertas SET nombre='$nombre',descripcion = '$descripcion' WHERE id='$id'";

        if (mysqli_query($this->db, $sql)) {
            $msj = "usuario actualizado correctamente";
        } else {
            $msj = "error en la actualizacion " . mysqli_error($this->db);
        }

        mysqli_close($this->db);

        return $msj;
    }


    function MetaGetIngresos($id){
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

    function GetSuma(){
        $this->abrir_conexion();
        $sql        = "SELECT SUM(ingreso_valor) FROM ingresos";
        $resultado  = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($resultado);
        return $row;
        $this->cerrar_conexion();
    }
    function GetSumaById($id){
        $this->abrir_conexion();
        $sql        = "SELECT SUM(ingreso_valor) FROM ingresos where meta_id = '$id'";
        $resultado  = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($resultado);
        return $row;
        $this->cerrar_conexion();
    }


    function getIngresoPorId($id){
        $this->abrir_conexion();
        $sql        = "SELECT * FROM ingresos where ingreso_id = '$id'";
        $resultado  = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($resultado);
        return $row;
        $this->cerrar_conexion();
    }

    function deleteIngresoPorId($id){
        $this->abrir_conexion();
        $sql = "DELETE FROM ingresos WHERE ingreso_id ='$id'";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Usuario eliminado satisfactoriamente";
        } else {
            $msj = "error en la eliminacion " . mysqli_error($this->db);
        }

        mysqli_close($this->db);

        return $msj;
        $this->cerrar_conexion();
    }


    function deleteMeta($id)
    {
        $this->abrir_conexion();
        $sql = "DELETE FROM metas WHERE meta_id ='$id'";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Usuario eliminado satisfactoriamente";
        } else {
            $msj = "error en la eliminacion " . mysqli_error($this->db);
        }

        mysqli_close($this->db);

        $this->cerrar_conexion();
        return $msj;
    }
}
