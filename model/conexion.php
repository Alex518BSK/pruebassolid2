<?php

class conexion{

var $servidor="serteza.com";
var $usuario="sertezac_omar";
var $pass="serteza14#";
var $nombd="sertezac_timbrado";

/*var $servidor="localhost";
var $usuario="root";
var $pass="";
var $nombd="sertezac_tf_personal";*/

function conectar(){
	@$con = mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->nombd);
	if (!$con) {
	header("Location:../views/login.php?msj=42");
    exit();
    }else{
    return $con;
    }
}
function ejecutarconsulta($consulta){
	$resp=mysqli_query($this->conectar(),$consulta);
     return $resp;
}
function conectar1(){
	@$con = mysqli_connect($this->servidor,$this->usuario,$this->pass,'sertezac_timbrado');
	if (!$con) {
	header("Location:../views/login.php?msj=42");
    exit();
    }else{
    return $con;
    }
}
function ejecutarconsulta1($consulta){
	$resp=mysqli_query($this->conectar1(),$consulta);
     return $resp;
}
	
}
?>