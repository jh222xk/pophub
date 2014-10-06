<?php

namespace Controller;

require_once './model/Github.php';
require_once './view/SingleUser.php';

class Users {
  /**
   * @var Userview
   */
  private $view;

  /**
   * @var Usermodel
   */
  private $model;
  
  /**
   * Constructor
   */
  function __construct() {
    $this->model = new \Model\Github();
    $this->view = new \View\SingleUser();
  }

  /**
   * Index action, listing all the users.
   * @param Integer $page 
   * @return The show all users view
   */
  public function index($page = null) {
    $users = $this->model->getAllUsers($page);

    return $this->view->showAllUsers(array(
      "users" => $users,
      "page" => $page
    ));
  }

  /**
   * Show action, display the given user.
   * @param String $user
   * @return The show view
   */
  public function show($user) {
    $userData = $this->model->getSingleUser($user);
    $repos = $this->model->getUsersRepos($user);
    $followers = $this->model->getUserFollowers($user);

    return $this->view->show(array(
      "user" => $userData,
      "repos" => $repos,
      "followers" => $followers
    ));
  }
}