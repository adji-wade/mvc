<?php
namespace libs\system;
  class Model
  {
      protected $entityManager;
      public function __contruct()
      {
        require_once "bootstrap.php";
        $this->entityManager = $entityManager;   
      }
  }
 
 
 ?>