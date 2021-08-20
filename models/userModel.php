<?php
require_once("./database/db.php"); //establecer conexion con la base de datos

class UserModel
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

    function UserCreate($data)
    {
        $this->abrir_conexion();

        $username = $data['username'];

        $sql = "INSERT INTO users(username) VALUES ('$username')";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Datos insertados correctamente";
        } else {
            $msj = "error en la insercion " . mysqli_error($this->db);
        }

        return $msj;

        $this->cerrar_conexion();
    }

    function UserList()
    {
        $this->abrir_conexion();
        $sql        = "SELECT * FROM users ";
        $resultado  = mysqli_query($this->db, $sql);
        
        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }

        return $datos;
        $this->cerrar_conexion();
    }




    function UserDelete($codigo)
    {
        $this->abrir_conexion();
        $sql = "DELETE FROM ofertas WHERE id_oferta ='$codigo'";

        if (mysqli_query($this->db, $sql)) {
            $msj = "Usuario eliminado satisfactoriamente";
        } else {
            $msj = "error en la eliminacion " . mysqli_error($this->db);
        }

        mysqli_close($this->db);

        return $msj;
        $this->cerrar_conexion();
    }

    function UserUpdate($id, $data)
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
}
