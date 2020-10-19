<?php
namespace Src\PhpRest;

use Src\Support\UrlParser;


class Router{
  use UrlParser;

  protected $routes;
  protected $namespace;
  protected $path;

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

    if(!array_key_exists($index, $this->routes)){
      return null;
    }

    $handler = $this->namespace.'\\'.$this->routes[$index];
    if(!class_exists($handler)){
      return null; 
    }

   return new $handler;
  }



  /**
   * Routes configuration
   */
  public function setRoute(String $url, String $handler){
    $url = preg_replace('/[^a-zA-Z0-9]/', '', $url);
    $this->routes[$url] = $handler;
    return $this->routes;
  }

  public function setPath(String $siteUrl){
    $this->path = $siteUrl;
  }

}