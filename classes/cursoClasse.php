<?php
  require_once 'CRUD.php';

  class Curso extends CRUD{

    protected $tabela = 'curso';

    private $nome;
    private $descricao;
    private $disponivel;
    private $status;
    private $carga_horaria;
    private $regra_negocio;
    private $valor;

    public function insert(){
      $sql = "INSERT INTO $this->tabela(nome,descricao,disponivel,status,carga_horaria,regra_negocio,valor) VALUES(:nome,:descricao,:disponivel,:status,:carga_horaria,:regra_negocio,:valor)";

      $stmt = BD::prepare($sql);

      $stmt->bindParam(':nome',$this->nome);
      $stmt->bindParam(':descricao',$this->descricao);
      $stmt->bindParam(':disponivel',$this->disponivel);
      $stmt->bindParam(':status',$this->status);
      $stmt->bindParam(':carga_horaria',$this->carga_horaria);
      $stmt->bindParam(':regra_negocio',$this->regra_negocio);
      $stmt->bindParam(':valor',$this->valor);

      return $stmt->execute();
    }

    public function update($id){
      $sql = "UPDATE $this->tabela SET nome = :nome,descricao = :descricao,disponivel = :disponivel,status = :status,carga_horaria = :carga_horaria,regra_negocio = :regra_negocio,valor = :valor WHERE id = :id";

      $stmt->bindParam(':nome',$this->nome);
      $stmt->bindParam(':descricao',$this->descricao);
      $stmt->bindParam(':disponivel',$this->disponivel);
      $stmt->bindParam(':status',$this->status);
      $stmt->bindParam(':carga_horaria',$this->carga_horaria);
      $stmt->bindParam(':regra_negocio',$this->regra_negocio);
      $stmt->bindParam(':valor',$this->valor);]
      $stmt->bindParam(':id',$id);

      return $stmt->execute();

    }
  }
?>
