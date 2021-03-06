<?php

namespace PopHub\Controller;

use PopHub\View;
use PopHub\Model\Session;


class Home {
  private $view;

  function __construct(View\Home $view) {
    $this->view = $view;
    $this->search = new View\Users();
    $this->auth = new Auth();
  }

  /**
   * Index action, the home page.
   * @return The showHome view
   */
  public function index() {
    $session = new Session();
    $auth = $session->get($this->auth->getTokenSessionName());

    $context = array(
      $this->view->getAuthField() => $auth,
      $this->view->getSearchField() => $this->search->getSearchFieldName()
    );

    return $this->view->showHome($context);
  }
}
