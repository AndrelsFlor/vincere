<?php
require_once 'CRUD.php';

class Materias extends CRUD{

  protected $tabela = 'materias';

  private $id_materia_curso;
  private $nome;
  private $id_aula;
  private $id_materia;
  private $id_curso;

  public function insert(){
    $sql = "INSERT INTO $this->tabela(id_materia_curso,nome) VALUES(:id_materia_curso,:nome)";

    $stmt = BD::prepare($sql);

    $stmt->bindParam(':id_materia_curso',$this->id_materia_curso);
    $stmt->bindParam(':nome',$this->nome);

    return $stmt->execute();
  }

  public function update($id){
    $sql = "UPDATE $this->tabela SET nome = :nome WHERE id = :id";

    $stmt = BD::prepare($sql);

    $stmt->bindParam(':id',$id);

    return $stmt->execute();
  }

  public function insertMateriasAula(){
    $sql = "INSERT INTO materias_aula(id_materia_curso,id_aula) VALUES(:id_materia_curso,:id_aula)";

    $stmt = BD::prepare($sql);

    $stmt->bindParam(':id_materia_curso',$this->id_materia_curso);
    $stmt->bindParam(':id_aula',$this->id_aula);

    return $stmt->execute();
  }


  public function insertMateriasCurso(){
    $sql = "INSERT INTO materias_curso(id_curso,id_materias) VALUES(:id_curso,:id_materias)";

    $stmt = BD::prepare($sql);

    $stmt->bindParam(':id_curso',$this->id_curso);
    $stmt->bindParam('id_materias',$this->id_materia);
  }



  public function setId_materia_curso($id_materia_curso){
    $this->id_materia_curso = $id_materia_curso;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function setId_aula($id_aula){
    $this->id_aula = $id_aula;
  }

  public function setId_materia($id_materia){
    $this->id_materia = $id_materia;
  }

  public function setId_curso($id_curso){
    $this->id_curso = $id_curso;
  }
}

?>
