<?php 

class ccllaass
{
	
	private $edad;
	private $cedula;
	private $nombres;
	private $apellidos;


	function __construct($nombres,$apellidos,$cedula,$edad)

	{
		$this->edad = $edad;
		$this->cedula = $cedula;
		$this->nombres = $nombres;
		$this->apellidos = $apellidos;

	}

	public getEdad()
	{
		return $this->edad;
	}

	public getCedula()
	{
		return $this->cedula;
	}

	public getNombres()
	{
		return $this->nombres;
	}

	public getApellidos()
	{
		return $this->apellidos;
	}

	public setEdad($edad)
	{
		$this->edad=$edad;
	}

	public setCedula($cedula)
	{
		$this->cedula=$cedula;
	}

	public setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
}



 ?>