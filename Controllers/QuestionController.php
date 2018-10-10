<?php 
/**
* 
*/
class QuestionController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('Views/Question/0.php');
	}

	function verdadero(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$question= new Question(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Question::verdadero($question);
		
		require_once('Views/Question/0.php');
	}

	function falso(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$question= new Question(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Question::falso($question);
		
		require_once('Views/Question/0.php');
	}

    /*Portada*/

	function cHJlZ3VudGF1bm8(){
		
		require_once('Views/Question/1.php');
	}

	/*Pregunta 1 verdadero*/

	function cHJlZ3VudGFkb3N2ZXJkYWRlcm8(){

		$question= new Question(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Question::verdadero($question);
		
		require_once('Views/Question/2.php');
	}

	/*Pregunta 1 falso*/

	function cHJlZ3VudGFkb3NmYWxzbw(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$question= new Question(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Question::falso($question);
		
		require_once('Views/Question/2.php');
	}

	/*Pregunta 2*/

	function cHJlZ3VudGF0cmVzdmVyZGFkZXJv(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$question= new Question(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Question::verdadero($question);
		
		require_once('Views/Question/3.php');
	}

	/*Pregunta 3 verdadero*/

	function cHJlZ3VudGFjdWF0cm92ZXJkYWRlcm8(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$question= new Question(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Question::verdadero($question);
		
		require_once('Views/Question/4.php');
	}	

	/*Pregunta 3 falso*/

	function cHJlZ3VudGFjdWF0cm9mYWxzbw(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$question= new Question(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Question::falso($question);
		
		require_once('Views/Question/4.php');
	}


	/*Pregunta 4 verdadero*/

	function cHJlZ3VudGFjaW5jb3ZlcmRhZGVybw(){

		//$sum = Question::all();
		//var_dump($sum);
		require_once('Views/Question/felicidades.php');
	}	

	/*Pregunta 4 falso*/

	function cHJlZ3VudGFjaW5jb2ZhbHNv(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$question= new Question(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Question::falso($question);
		
		require_once('Views/Question/5.php');
	}

	function cHJlZ3VudGFzZWlz(){

		$question= new Question($_POST['nombres'],$_POST['correo'],$_POST['celular']);

		Question::saveuser($question);
		
		require_once('Views/Question/5.php');
	}

	function c2lndWVpbnRlbnRhbmRv(){
		
		require_once('Views/Question/sigueintentando.php');
	}

	function error(){
		require_once('Views/Question/error.php');
	}

}

?>