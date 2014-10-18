<?php

namespace PopHub\Controller;

use PopHub\View;
use PopHub\Model\Session;


class Home {
  private $view;

  function __construct() {
    $this->view = new View\Home();
  }

  /**
   * Index action, the home page.
   * @return The showHome view
   */
  public function index() {
    $auth = Session::get("access_token");

    $context = array("authenticated" => $auth);

    return $this->view->showHome($context);
  }
}