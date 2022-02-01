
<?php

class Request{
  public $urls;
  public $pathname;
  public $query;
  public $body;

  function __construct()
  {
      $_url = isset($_GET['$url']) ? $_GET['$url'] : null;
      $this->pathname="/".$_url;

      $_url = rtrim($_url, '/');
      $_url = filter_var($_url, FILTER_SANITIZE_URL);


      $this->urls = explode('/', $_url);
      unset($_GET['$url']);
      
      $this->query=$_GET;
      $this->body=$_POST;

      // print_r($this->pathname);
      // print_r($this->urls);
      // print_r($this->query);
      // print_r($this->body);
  }
}