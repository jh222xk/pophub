<?php

namespace View;

class Home {
  public function showHome() {
    echo "<h1>PopHub</h1>";
    echo "<p><a href='/users/'>Go to all the users</a></p>";
    echo "<p><a href='/login/'>Sign in through Github</a></p>";
  }
}