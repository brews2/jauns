<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>
<link rel="stylesheet" href="css/style2.css">
<body>

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




