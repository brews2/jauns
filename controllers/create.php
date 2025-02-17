<?php

$errors = [];  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $content = $_POST["content"] ?? '';  


    if (empty($content)) {
        $errors["content"] = "Content is required.";  
    }

    
    if (strlen($content) > 50) {
        $errors["content"] = "Blogs nedrikst parsniegt 50 simbolus!";
    }
    
    
    if (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content);";
        $params = ["content" => $content];
        $db->query($sql, $params);
        
        header("Location: /");  
        exit();
    }
}

require "views/posts/create.view.php";  
?>
