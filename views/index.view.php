<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
!
<div>
<h1>Blogs<h1> 
  <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
  <button>meklet</button>
</form>

<?php if (count($posts) == 0 ) { ?>
  <p>Nav atrasts!!🤔💋 </p>
  <img src="sad.jpg">
<?php } ?>
<ul>
 <?php foreach($posts as $post){ ?>
  <li>  <?= $post["content"] ?> </li>
<?php } ?>
</ul>
</div>
</body>
</html>




