<?php

class Bootstrap
{
  public $req;
  public $res;
  public $next;

  function __construct()
  {
    $this->req = new Request();
    $this->res = new Response();
    $this->next = new Next();
  }


  function use(Router $router)
  {
    $notFound = true;
    foreach ($router->routes as $path => $routes) {
      if ($path === $this->req->pathname) {
        $notFound = false;
        $fns = $routes["fns"];

        foreach ($fns as $index => $fn) {

          if ($index !== $this->next->counter) return;

          $refFn = new ReflectionFunction($fn);

          $n = $refFn->getNumberOfParameters();
          if ($n === 3) {
            $fn($this->req, $this->res, $this->next);
          } else $fn($this->req, $this->res);
        }
        break;
      }
    }
    if ($notFound) {
      throw new Error("Not found");
    }
  }
}
