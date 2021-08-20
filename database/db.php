<?php
class Conectar{
    
    public static function conexion(){
        $servidor ="localhost";
        $usuario="root";
        $password="";
        $bd="appblank";
        $conexion = new mysqli($servidor, $usuario, $password, $bd);
        return $conexion;
        
    }
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

