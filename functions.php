<?php

function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function redirectIfNotFound($location = "/") {
    http_response_code(404);
    header("Location: $location", true, 302);
    exit(); // Like die(). but more softly 
}