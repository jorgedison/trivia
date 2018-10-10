<?php 


$controllers=array(
	'question'=>['index','register','save', 'saveuser','show','updateshow','update','delete','search','error', 'verdadero', 'falso', 'cHJlZ3VudGF1bm8', 'cHJlZ3VudGFkb3N2ZXJkYWRlcm8', 'cHJlZ3VudGFkb3NmYWxzbw', 'cHJlZ3VudGF0cmVzdmVyZGFkZXJv', 'cHJlZ3VudGFjdWF0cm92ZXJkYWRlcm8', 'cHJlZ3VudGFjdWF0cm9mYWxzbw', 'cHJlZ3VudGFjaW5jb2ZhbHNv', 'cHJlZ3VudGFjaW5jb3ZlcmRhZGVybw', 'c2lndWVpbnRlbnRhbmRv', 'cHJlZ3VudGFzZWlz']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('question','error');
	}		
}else{
	call('question','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'question':
		require_once('Model/Question.php');
		$controller= new QuestionController();
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>