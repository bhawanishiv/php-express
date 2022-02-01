<?php

class Router
{

  public $routes;

  function __construct()
  {
    $this->routes = array();
  }

  function get($path, ...$fns)
  {
    $this->routes[$path] = array("fns"=>$fns);
  }
}
