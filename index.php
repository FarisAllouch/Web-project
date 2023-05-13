<?php

require "vendor/autoload.php";

Flight::route("GET /test", function(){
    echo "Hello from test route";
});

Flight::route("/", function(){
    echo "Hello from /route route";
});

Flight::start();
?>