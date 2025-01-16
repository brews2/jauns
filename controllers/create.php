<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $content = $_POST["content"];
    
    $sql = "INSERT INTO posts (content) VALUES (:content)";
    
    $params = ["content" => $content];

    try {
        $result = $db->query($sql, $params);

       
        var_dump($result);  
        
        $lastInsertId = $db->lastInsertId();
        var_dump($lastInsertId);  
        
    } catch (Exception $e) {
       
        echo "Kļūda: " . $e->getMessage();
    }
    
  
    header("Location: /");
    exit();
}


require "views/posts/create.view.php";
?>
