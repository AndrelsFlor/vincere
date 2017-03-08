<?php
require_once 'CRUD.php';

class Usuario extends CRUD{

  protected $tabela = 'usuario';

  private $id_pessoa;
  private $login;
  private $senha;
  private $nvl_acesso;

  public function insert(){
    $sql = "INSERT INTO $this->tabela(id_pessoa,login,senha,nvl_acesso) VALUES(:id_pessoa,:login,:senha,:nvl_acesso)";

    $stmt = BD::prepare($sql);

    $stmt->bindParam(':id_pessoa',$this->id_pessoa);
    $stmt->bindParam(':login',$this->login);
    $stmt->bindParam(':senha',$this->senha);
    $stmt->bindParam(':nvl_acesso',$this->nvl_acesso);

    return $stmt->execute();
  }

  public function update($id){
    $sql = "UPDATE $this->tabela SET id_pessoa = :id_pessoa, login = :login, senha = :senha, nvl_acesso = :nvl_acesso WHERE id = :id";

    $stmt =  BD::prepare($sql);

    $stmt->bindParam(':id_pessoa',$this->id_pessoa);
    $stmt->bindParam(':login',$this->login);
    $stmt->bindParam(':senha',$this->senha);
    $stmt->bindParam(':nvl_acesso',$this->nvl_acesso);
    $stmt->bindParam(':id',$id);

    return $stmt->execute();

  }

  public function setId_pessoa($id_pessoa){
    $this->id_pessoa = $id_pessoa;
  }

  public function setLogin($login){
    $this->login = $login;
  }

  public function setSenha($senha){
    $this->senha = password_hash($senha,PASSWORD_DEFAULT);
  }

  public function setNvl_acesso($nvl_acesso){
    $this->nvl_acesso = $nvl_acesso;
  }
}

?>
