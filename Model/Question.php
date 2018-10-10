<?php 
/**
* 
*/
class Question
{
	private $id;
	private $nombres;
	private $apellidos;
	private $estado;
	private $correo;
	private $celular;

	
	function __construct($id, $nombres, $correo, $celular, $apellidos, $estado)
	{
		$this->setId($id);
		$this->setNombres($nombres);
		$this->setApellidos($apellidos);
		$this->setEstado($estado);	
		$this->setCorreo($correo);
		$this->setCelular($celular);		
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function getEstado(){

		return $this->estado;
	}

	public function setEstado($estado){
		
		if (strcmp($estado, 'on')==0) {
			$this->estado=1;
		} elseif(strcmp($estado, '1')==0) {
			$this->estado='checked';
		}elseif (strcmp($estado, '0')==0) {
			$this->estado='of';
		}else {
			$this->estado=0;
		}

	}

	public static function save($question){
		$db=Db::getConnect();
		//var_dump($question);
		//die();
		

		$insert=$db->prepare('INSERT INTO respuesta (value) VALUES (1)');
		$insert->bindValue('nombres',$question->getNombres());
		$insert->bindValue('apellidos',$question->getApellidos());
		$insert->bindValue('estado',$question->getEstado());
		$insert->execute();
	}

	public static function saveuser($question){
		$db=Db::getConnect();
		//var_dump($question);
		//die();
		
		$insert=$db->prepare('INSERT INTO usuarios (nombres,  correo, celular) VALUES (:nombres, :correo, :celular)');
		$insert->bindValue('nombres',$question->getNombres());
		$insert->bindValue('correo',$question->getCorreo());
		$insert->bindValue('celular',$question->getCelular());
		$insert->execute();
	}

	public static function verdadero($question){
		$db=Db::getConnect();
		//var_dump($question);
		//die();
		$insert=$db->prepare('INSERT INTO respuesta (value) VALUES (1)');
		$insert->execute();
	}

	public static function falso($question){
		$db=Db::getConnect();
		//var_dump($question);
		//die();
		$insert=$db->prepare('INSERT INTO respuesta (value) VALUES (0)');
		$insert->execute();
	}

	public static function all(){
		$db=Db::getConnect();
		// //$lista=[];
 
		// $select=$db->query('SELECT sum(value) FROM (SELECT respuesta.value FROM respuesta ORDER BY respuesta.value desc limit 4) as subt');
		// var_dump($select);
		//$row = $select->row();
		//$select->execute();
		//$questionDb=$select->fetch();
 		//$question = new question($questionDb['id'],$questionDb['nombres'], $questionDb['apellidos'], $questionDb['estado']);
		//foreach($select->fetchAll() as $alumno){
		//	$lista[]=new Question($alumno['id'],$alumno['nombres'],$alumno['apellidos'],$alumno['estado']);
		//}
		//return $row;

		$stmt = $db->prepare("SELECT sum(value) as x FROM (SELECT respuesta.value FROM respuesta ORDER BY respuesta.value desc limit 4) as subt'");
		$stmt->execute();

		$row = $db->fetchAll();
		$sum = $row->x;

return $sum;

	}

	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM question WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();

		$questionDb=$select->fetch();


		$question = new question ($questionDb['id'],$questionDb['nombres'], $questionDb['apellidos'], $questionDb['estado']);
		//var_dump($question);
		//die();
		return $question;

	}

	public static function update($question){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE question SET nombres=:nombres, apellidos=:apellidos, estado=:estado WHERE id=:id');
		$update->bindValue('nombres', $question->getNombres());
		$update->bindValue('apellidos',$question->getApellidos());
		$update->bindValue('estado',$question->getEstado());
		$update->bindValue('id',$question->getId());
		$update->execute();
	}

	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM question WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}

?>