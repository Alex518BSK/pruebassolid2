<?php 
class Maestro
{

var $idmaestro;
var $nombre;
var $edad;
var $especialidad;
var $horasplaza;

function Maestro()
{
	$this->idmaestro=$idmaestro;
	$this->nombre=$nombre;
	$this->edad=$edad;
	$this->especialidad=$especialidad;
	$this->horasplaza=$horasplaza;
}
function get_idmaestro()
{
	return $idmaestro;

}
function get_nombre()
{
	return $nombre;
}
function get_edad()
{
	return $edad;

}
function get_especialidad()
{
	return $especialidad;
}
function get_horasplaza()
{
	return $horasplaza;
}
function set_idmaestro($new_idmaestro)
{
	$idmaestro=$new_idmaestro;
}
function set_nombre($new_nombre)
{
	$nombre=$new_nombre;
}
function set_especialidad($new_especialidad)
{
	$especialidad=$new_especialidad;
}
function set_edad($new_edad)
{
	$edad=$new_edad;
}
function set_horasplaza($new_horasplaza)
{
	$horasplaza=$new_horasplaza
}
function set_materia()
{

}


}


 ?>