<?php

//por herdar do PDO, a classe Sql tem todas as características
//como usar os métodos prepare(), execute(), etc...
class Sql extends PDO {

  private $conn;

  //método construtor se autocria junto com a instanciação da classe
  //passar os atributos de uma vez, sem getter e setter
  public function __construct(){

    $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
  }



  private function setParams($statment, $parameters = array()){

    foreach ($parameters as $key => $value) {

      //separa o 
      $statment->setParam($key, $value);
    }
  }



  private function setParam($statment, $key, $value){

    $statment->bindParam($key, $value);

  }


  //classe para lidar com as queries
  //$rawQuery lida com o SQL puro
  public function query($rawQuery, $params = array()){

    $stmt = $this->conn->prepare($rawQuery);

    $this->setParams($stmt, $params);

    $stmt->execute();

    return $stmt;
  }


  //retorno é do tipo array (:array)
  public function select($rawQuery, $params = array()):array
  {

    $stmt = $this->query($rawQuery, $params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  }

}
 ?>
