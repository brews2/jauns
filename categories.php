<?php
require "functions.php";
require "Database.php";
require "config.php";
$config = require("controllers/config.php");

$db = new Database($config["database"]);

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE category_name LIKE :category_name"; 
    $params = ["category_name" => $search_query];
}

$categories = $db->query($sql, $params)->fetchAll();


require "views/categories.view.php";
?>
