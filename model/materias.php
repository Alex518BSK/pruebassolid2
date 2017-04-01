<?php 

class Materia
{
	var $idmateria;
	var $nombre;
	var $creditos;
	var $especialidad;
	function Materia($idmateria,$nombre,$creditos,$especialidad)
	{
		$this->idmateria=$idmateria;
		$this->nombre=$nombre;
		$this->creditos=$creditos;
		$this->especialidad=$especialidad;

	}

	function get_idmateria()
	{
		return $idmateria;
	}
	function get_nombre()
	{
		return $nombre;
	}
	function get_creditos()
	{	
		return $creditos;
	}
	function get_especialidad()
	{
		return $especialidad;
	}

	function set_idmateria($new_idmateria)
	{
		$idmateria=$new_idmateria;
	}
	function set_nombre($new_nombre)
	{
		$nombre=$new_nombre;

	}
	function set_creditos($new_creditos)
	{
		$creditos=$new_creditos;
	}
	function set_especialidad($new_especialidad)
	{
		$especialidad=$new_especialidad;
	}
	function set_dias($dias)
	{
		
	}
	function set_horas($horas)
	{

	}
	function get_dias()
	{

	}
	function get_horas()
	{

	}
	function set_salon($salon)
	{

	}

	function get_salon()
	{

	}


}


 ?>