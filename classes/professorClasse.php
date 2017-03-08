<?php
require_once 'CRUD.php';

class Professor extends CRUD{
protected $tabela = 'professor';

private $idPessoa;

public function insert(){
$sql = "INSERT INTO $this->tabela(idPessoa) VALUES(:idPessoa)";

$stmt = BD::prepare($sql);

$stmt->bindParam(':idPessoa',$this->idPessoa);

return $stmt->execute();
}

public function update($idPessoa){
  return false;
}

public function setIdPessoa($idPessoa){
  $this->idPessoa = $idPEssoa;
}

}
?>
