<?php

namespace PopHub\Controller;

use Kagu\Config\Config;

use PopHub\Model;
use PopHub\Model\Session;
use PopHub\View;

class Auth {
  /**
   * @var Userview
   */
  private $view;

  /**
   * @var Usermodel
   */
  private $model;

  function __construct() {
    $config = new Config(__DIR__."/../config/app.php");
    $this->model = new Model\Github($config->get("GITHUB_CLIENT_ID"), $config->get("GITHUB_CLIENT_SECRET"), $config->get("GITHUB_CALLBACK_URL"));
    $this->followers = new Model\Followers($config);

    $this->view = new View\Auth();
  }

  public function index() {
    $auth = $this->model->authorize();

    // var_dump($auth);

    return $auth;
  }

  public function getToken($code) {
    try {
      $token = $this->model->postAccessToken($code);
    } catch (\Exception $e) {
      return;
    }

    Session::set("access_token", $token);

    // var_dump($token);

    return $token;
  }

  public function loggedInUser($accessToken) {
    $user = $this->model->getLoggedInUser($accessToken);

    $auth = Session::get("access_token");

    $followers = $this->followers->getFollowers($user->login);

    $events = null;

    if ($followers !== null) {
      foreach ($followers as $follower) {
        $events[] = $this->model->getUserActivity($follower["user"]);
      }
    }

    $context = array(
      "followers" => $followers,
      "user" => $user,
      "events" => $events,
      "authenticated" => $auth
    );

    // var_dump($events[0]);

    // var_dump($events[13]->payload);

    return $this->view->showLoggedIn($context);
  }
}