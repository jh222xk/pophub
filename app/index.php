<?php

// require_once 'controller/Routing.php';
// require_once 'controller/Users.php';
// require_once 'controller/Home.php';
// require_once 'controller/Login.php';
// require_once 'controller/github.php';
// require_once 'view/SingleUser.php';

#https://api.github.com/repositories

// $g = new Github();
// $user = $g->getSingleUser("jh222xk");
// $repos = $g->getUsersRepos("jh222xk");

require __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/bootstrap/start.php';

$app->doRoute();


// use Symfony\Component\Routing;

// $request = $_SERVER['REQUEST_URI'];
// $router = new controller\Routers();
// $routes = $router->doRoute();
// $context = new Routing\RequestContext($request);
// $matcher = new Routing\Matcher\UrlMatcher($routes, $context);

// try {
//   $match = $matcher->match($request);
//   var_dump($match);
//   $controller = new $match["controller"];
//   if (isset($match["name"])) {
//     $controller->$match["action"]($match, $match["name"]);
//   }
//   else {
//     $controller->$match["action"]($match);
//   }
  
//   // var_dump($controller);
//   // $userData = $controller->getSingleUser($match["name"]);  
//   // $view = new \view\SingleUser();
//   // $view->show($userData);

//   // $getUser = $g->getSingleUser($url);
//   // $repos = $g->getUsersRepos($url);
//   // $view = new \view\SingleUser();
//   // $view->show($getUser);
//   // $view->showUsersRepos($repos);
// }
// catch(Routing\Exception\ResourceNotFoundException $e) {
//   print("Sidan finns inte... (404)");
// }
// catch(PopHub\Exception\RateLimitExceededException $e) {
//   print "Inga mer requests på en timme...";
// }
// catch (Exception $e) {
//   print("Ett fel inträffade! (500)");
// }

// var_dump($match);


// $routing = new \controller\Routers();
// $routing->doRoute();

// var_dump($user);
// var_dump($repos);

// $allUsers = $g->getAllUsers();


// $file = 'data.json';

// $allUsers = json_decode(file_get_contents($file));

// var_dump($allUsers);

// $view = new \view\SingleUser();
// $view->show($user);
// $view->showUsersRepos($repos);



// var_dump($data);

// $current = file_get_contents($file);
// $current .= $allUsers;
// file_put_contents($file, json_encode($allUsers));

// var_dump($allUsers);
// $data = json_decode($data);
// var_dump($data->name);

// $view = new \view\SingleUser();
// $view->showAllUsers($allUsers);

// foreach ($allUsers as $key => $user) {
//   var_dump($user->login);
// }

// $c = new Http();
// $c->setUrl("https://api.github.com/users");
// // $c->setSince(100);
// $result = $c->getSingleUser("drager");
// $response = explode("\r", $result);
// $body = array_pop($response);
// $data = json_decode($body);
// // var_dump($asd);
// var_dump($data->name);