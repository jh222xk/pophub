<?php

return array(

  'DEBUG' => true,

  'ERROR_LOG' => "log/error.log",

  'GITHUB_CLIENT_ID' => getenv("POPHUB_GITHUB_CLIENT_ID"),

  'GITHUB_CLIENT_SECRET' => getenv("POPHUB_GITHUB_CLIENT_ID"),

  'GITHUB_CALLBACK_URL' => "http://localhost:9999/github-callback"
);
