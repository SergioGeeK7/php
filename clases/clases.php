<?php 

	class clases
	{


		// atributos == variables

		var $op1;
		var $op2;
		var $op3;



		function sumar($valor,$valor2)
		{
			$this->op1 = $valor + $valor2;
		}

		function multiplicar($valor,$valor2)
		{
			$this->op2 = $valor * $valor2;	
		}

		function resultado()
		{
			$this->res = $this->op1 + $this->op2;
			echo $this->res;
		}




	}


	$clase = new clases();
	$clase->sumar(40,60);
	$clase->multiplicar(4,8);
	$clase->resultado();


 ?>