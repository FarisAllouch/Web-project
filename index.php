<?php

require "vendor/autoload.php";

Flight::route("GET /test", function(){
    echo "Hello from index route";
});

Flight::route("/", function(){
    echo "Hello from /index route";
});

Flight::start();
?>
