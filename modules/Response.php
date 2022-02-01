<?php

class Response
{

  private $statusCode;

  function __construct()
  {
    $this->statusCode = 200;
    $this->view = new View();
  }

  function status($code)
  {
    $this->statusCode = $code;
  }

  function send($anything)
  {
    http_response_code($this->statusCode);
    echo json_encode($anything);
  }

  function render($fileName, $meta = array("title" => "PHP Application"), $params = null)
  {
    $fileToRender = $GLOBALS["config"]["paths"]["views"] . "/" . $fileName;
  
    $this->view->meta = $meta;
    $this->view->props = json_encode($params);

    $this->view->render($fileToRender);
  }
}
