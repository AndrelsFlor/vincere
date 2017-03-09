<?php
  require_once 'CRUD.php';

  class Aula extends CRUD{
    protected $tabela = 'aula';


    private $id_materia_curso;
    private $id_professor;
    private $detalhes;
    private $data_aula;
    private $data_disponivel;
    private $status;
    private $id_aula;
    private $parte;
    private $url;
    private $assuntos;
    private $detalhes;

    public function insert(){
      $sql = "INSERT INTO $this->tabela(id_materia_curso,id_professor,detalhes,data_aula,data_disponivel,status) VALUES(:id_materia_curso,:id_professor,:detalhes,:data_aula,:data_disponivel,:status)";

      $stmt = BD::prepare($sql);

      $stmt->bindParam(':id_materia_curso',$this->id_materia_curso);
      $stmt->bindParam(':id_professor',$tihs->id_professor);
      $stmt->bindParam(':detalhes',$this->detalhes);
      $stmt->bindParam(':data_aula',$this->data_aula);
      $stmt->bindParam(':data_disponivel',$this->data_disponivel);
      $stmt->bindParam(':status',$this->status);

      return $stmt->execute();
    }

    public function update($id){
      $sql = "UPDATE $this->tabela SET id_materia_curso = :id_materia_curso ,id_professor = :id_professor,detalhes = :detalhes,data_aula = :data_aula,data_disponivel = :data_disponivel,status = :status WHERE id = :id";

      $stmt = BD::prepare($sql);

      $stmt->bindParam(':id_materia_curso',$this->id_materia_curso);
      $stmt->bindParam(':id_professor',$tihs->id_professor);
      $stmt->bindParam(':detalhes',$this->detalhes);
      $stmt->bindParam(':data_aula',$this->data_aula);
      $stmt->bindParam(':data_disponivel',$this->data_disponivel);
      $stmt->bindParam(':status',$this->status);
      $stmt->bindParam(':id',$id);

      return $stmt->execute();
    }

    public function insertAulaParte(){
      $sql = 'INSERT INTO aula_parte(id_aula,parte,url,assuntos,detalhes) VALUES(:id_aula,:parte,:url,:assuntos,:detalhes)';

      $stmt = BD::prepare($sql);

      $stmt->bindParam(':id_aula',$this->id_aula);
      $stmt->bindParam(':parte',$this->parte);
      $stmt->bindParam(':url',$this->url);
      $stmt->bindParam(':assuntos',$this->assuntos);
      $stmt->bindParam(':detalhes', $this->detalhes);

      return $stmt->execute();
    }

    public function updateAulaParte($id){
      $sql = 'UPDATE aula_parte SET id_aula = :id_aula ,parte = :parte,url = :url,assuntos = :assuntos,detalhes = :detalhes WHERE id = :id';

      $stmt = BD::prepare($sql);

      $stmt->bindParam(':id_aula',$this->id_aula);
      $stmt->bindParam(':parte',$this->parte);
      $stmt->bindParam(':url',$this->url);
      $stmt->bindParam(':assuntos',$this->assuntos);
      $stmt->bindParam(':detalhes', $this->detalhes);
      $stmt->bindParam(':id',$id);

      return $stmt->execute();
    }
  }
?>
