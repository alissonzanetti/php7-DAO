<?php

class Usuario {

  private $idusuario;
  private $deslogin;
  private $dessenha;
  private $dtcadastro;

  //getter and setter id
  public function getIdUsuario(){
    return $this->idusuario;
  }

  public function setIdUsuario($value){
    $this->idusuario = $value;
  }

  //getter and setter login
  public function getDeslogin(){
    return $this->deslogin;
  }

  public function setDeslogin($value){
    $this->deslogin = $value;
  }

  //getter and setter password
  public function getDessenha(){
    return $this->dessenha;
  }

  public function setDessenha($value){
    $this->dessenha = $value;
  }

  //getter and setter form
  public function getTCadastro(){
    return $this->dtcadastro;
  }

  public function setTCadastro($value){
    $this->dtcadastro = $value;
  }


  public function loadById($id){

    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
      ":ID"=>$id
    ));

    if(count ($results) > 0){
      $row = $results[0];

      $this->setIdUsuario($row['idusuario']);
      $this->setDeslogin($row['deslogin']);
      $this->setDessenha($row['dessenha']);
      $this->setTCadastro(new DateTime ($row['dtcadastro']));

    }

  }

  public function __toString(){

    return json_encode(array(
      "idusuario"=>$this->getIdUsuario(),
      "deslogin"=>$this->getDeslogin(),
      "dessenha"=>$this->getDessenha(),
      "dtcadastro"=>$this->getTCadastro()->format("d/m/Y H:i:s")
    ));
  }

}
 ?>
