<?php
require "functions.php";
require "Database.php";

$config = require("config.php");



$db = new Database($config["database"]);

$sql = "SELECT * FROM posts";
$params = [];
//meklesana
if(isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query";
    $params = ["search_query" => $search_query];
}

$posts = $db->query($sql, $params)->fetchAll();

$d = "Liels";
$d .= "suns";

require "views/index.view.php";




