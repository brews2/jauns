<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {

$sql = "INSERT INTO posts (content) VALUES ( :content );";
$params = ["content" => $_POST["content"]];
$posts = $db ->query($sql, $params)->fetchAll();
header("Location: /"); exit();
$errors = [];
if (!isset($_POST["content"]) || ){


}
}


require "views/posts/create.view.php";
?>
