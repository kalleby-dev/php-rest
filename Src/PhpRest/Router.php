<?php
namespace Src\PhpRest;

use Src\Support\UrlParser;


class Router{
  use UrlParser;

  private $route;
  private $namespace;
  private $path;

  public function __construct(String $namespace = '') {
    $this->namespace = $namespace;
  }

  /**
   * Retorna o handler de acordo com a url inserida.
   * @return Object
   */
  public function getHandler()
  {
    $url = $this->parseUrl();
    $index = $url[0];

    if(!array_key_exists($index, $this->route)){
      return null;
    }

    $handler = $this->namespace.'\\'.$this->route[$index];
    if(!class_exists($handler)){
      return null; 
    }

   return new $handler;
  }



  /**
   * Routes configuration
   */
  public function setRoute(String $url, String $handler){
    $url = ($url == '/')? '' : $url; 
    $this->route[$url] = $handler;
    return $this->route;
  }

  public function setPath(String $siteUrl){
    $this->path = $siteUrl;
  }

}