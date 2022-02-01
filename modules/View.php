<?php
class View
{
  function render($fileToRender)
  {
    require $fileToRender;
  }
}
