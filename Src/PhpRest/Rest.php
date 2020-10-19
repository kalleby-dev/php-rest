<?php
namespace Src\PhpRest;

class Rest extends Router{
  private $handler;
  private $method;
  private $param = [];

  private $body;

  public function __construct(String $namespace){
    parent::__construct($namespace);
  }

  public function dispatch(){
    if(empty($this->routes)) return false;

    $this->addHandler();
    var_dump($this->handler);
    return true;
  }

  public function addHandler(){
    $this->handler = $this->getHandler();
    return $this;
  }

  public function setBody(){
    $this->body = file_get_contents('php://input');
    return $this;
  }

  public function getBody(){
    echo json_encode($this->body);
    return $this->body;
  }

  public function addParam()
  {
    
  }
}