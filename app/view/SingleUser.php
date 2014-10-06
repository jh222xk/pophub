<?php

namespace View;

/**
* 
*/
class SingleUser {
  // public function show($user) {
  //   $context["user"] = $user;
  //   return $this->render($context);
  // }

  public function show(array $context) {
    print("<h1>" . $context["user"]->login . "</h1>");
    print("<p>Number of followers: " . $context["user"]->followers);
    print("<p>Number of public repos: " . $context["user"]->public_repos);
    $this->showUsersRepos($context["repos"]);
    $this->showUserFollowers($context["followers"]);
  }

  public function showAllUsers(array $context) {
    foreach ($context["users"] as $user) {
      print("<h2><a href='/users/$user->login'>" . $user->login . "</a></h2>");
      print("<p>ID: " . $user->id . "</p>");
      // foreach ($user as $login) {
      //   print("<h2>" . $user->login . "</h2>");
      // }
    }
    print("<a href='/users/" . $context["page"] . "'>Nästa sida</a>");
    // return $this->render($users);
  }

  public function showUsersRepos(array $repos) {
    print("<h2>Repos</h2>");
    print("<ul>");

    foreach ($repos as $repo) {
      print("<li>" . $repo->name . "</li>");
      if ($repo->description) {
        // print("<em>" . $repo->description . "</em>");
      }
      // foreach ($user as $login) {
      //   print("<h2>" . $user->login . "</h2>");
      // }
    }
    print("</ul>");
  }

  public function showUserFollowers(array $followers) {
    // var_dump($followers);

    print("<h2>Followers</h2>");
    print("<ul>");

    foreach ($followers as $follower) {
      print("<li><a href='$follower->login'>" . $follower->login . "</a></li>");
    }

    print("</ul>");
  }

  public function render(array $context) {
    print("<h1>" . $context["user"]->login . "</h1>");
    // foreach ($context as $key => $value) {
    //   echo $value;
    // }
  }
}