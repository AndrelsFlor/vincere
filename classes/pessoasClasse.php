<?php
require_once 'CRUD.php';

class Pessoas extends CRUD{

  protected $tabela = 'pessoa';

  private $nome;
  private $telefone;
  private $dt_nascimento;
  private $rg;
  private $cpf;
  private $dt_cadastro;
  private $ativo;
  private $email;

  public function insert(){
    $sql = "INSERT INTO $this->tabela(nome,telefone,dt_nascimento,rg,cpf,dt_cadastro,ativo,email) VALUES(:nome,:telefone,:dt_nascimento,:rg,:cpf,:dt_cadastro,:ativo,:email)";

    $stmt = BD::prepare($sql);

    $stmt->bindParam(':nome',$this->nome);
    $stmt->bindParam(':telefone',$this->telefone);
    $stmt->bindParam(':dt_nascimento',$this->dt_nascimento);
    $stmt->bindParam(':rg',$this->rg);
    $stmt->bindParam(':cpf',$this->cpf);
    $stmt->bindParam(':dt_cadastro'.$this->dt_cadastro);
    $stmt->bindParam(':ativo',$this->ativo);
    $stmt->bindParam(':email',$this->email);

    return $stmt->execute();
  }

  public function update($id){
    $sql = "UPDATE $this->tabela SET nome = :nome, telefone = :telefone, dt_nascimento = :dt_nascimento, rg = :rg, cpf = :cpf, dt_cadastro = :dt_cadastro, ativo = :ativo, email = :email WHERE id = :id";

    $stmt = BD::prepare($sql);


    $stmt->bindParam(':nome',$this->nome);
    $stmt->bindParam(':telefone',$this->telefone);
    $stmt->bindParam(':dt_nascimento',$this->dt_nascimento);
    $stmt->bindParam(':rg',$this->rg);
    $stmt->bindParam(':cpf',$this->cpf);
    $stmt->bindParam(':dt_cadastro'.$this->dt_cadastro);
    $stmt->bindParam(':ativo',$this->ativo);
    $stmt->bindParam(':email',$this->email);
    $stmt->bindParam(':id',$id);

    return $stmt->execute();

  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }

  public function setDt_nascimento($dt_nascimento){
    $this->dt_nascimento = $dt_nascimento;
  }

  public function setRg($rg){
    $this->rg = $rg;
  }

  public function setCpf($cpf){
    $this->cpf = $cpf;
  }

  public function setDt_cadastro($dt_cadastro){
    $this->dt_cadastro = $dt_cadastro;
  }

  public function setAtivo($ativo){
    $this->ativo = $ativo;
  }

  public function setEmail($email){
    $this->email = $email;
  }
}
?>
