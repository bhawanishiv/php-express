<?php
class Next{
  public $counter;

  function __construct()
  {
    $this->counter=0;    
  }

  function go(mixed $params=null){
    if($params) throw new Error();
    else $this->counter++;
  }
}