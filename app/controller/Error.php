<?php

namespace Controller;

require_once './view/Error.php';

class Error {
  private $view;

  function __construct() {
    $this->view = new \View\Error();
  }

  /**
   * Controller action used when server errors occurs.
   * @return View
   */
  public function serverError() {
    return $this->view->showServerError();
  }

  /**
   * Controller action used when page is not found.
   * @return View
   */
  public function pageNotFoundError($page) {
    return $this->view->showPageNotFound($page);
  }
}