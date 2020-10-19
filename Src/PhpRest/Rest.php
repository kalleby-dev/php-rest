<?php
namespace Src\PhpRest;

class Rest extends Router{
  private $handler;
  private $method;
  private $param = [];

  public function __construct(){
    $this->addHandler();
  }

  public function addHandler()
  {
    $this->handler = $this->getHandler();
  }

  public function addMethod()
  {
    
  }

  public function addParam()
  {
    
  }
}