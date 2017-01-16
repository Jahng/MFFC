<?php

use NoahBuscher\Macaw\Macaw;

/*
Macaw::get('/', function() {
  echo "Hello World!";
});
*/
Macaw::get('/user/info','\MFFC\Controllers\UserController@info');

Macaw::get('/', '\MFFC\Controllers\HomeController@home');

Macaw::error(function() {
  echo '404 :: Not Found';
});

Macaw::dispatch();