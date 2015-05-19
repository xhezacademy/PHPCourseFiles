<?php

/**
*
*/
class Controller
{
  public function view($file, $data)
  {
    $view = new View($file, $data);

    echo $view;
  }
}
