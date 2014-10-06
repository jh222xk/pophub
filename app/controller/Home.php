<?php

namespace Controller;

require_once './view/Home.php';

class Home {
  private $view;

  function __construct() {
    $this->view = new \View\Home();
  }

  public function index() {
    return $this->view->showHome();
  }
}