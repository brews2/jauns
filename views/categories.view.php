<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorijas</title>
</head>
<body>

<h1>Kategorijas</h1>

<form action="/categories.php" method="GET">
    <input name="search_query" type="text" value="<?= isset($_GET['search_query']) ? htmlspecialchars($_GET['search_query']) : '' ?>" />
    <button type="submit">Meklēt</button>
</form>

<?php if (count($categories) == 0): ?>
    <p>Nav atrastas kategorijas!!🤔💋</p>
<?php else: ?>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li><?= htmlspecialchars($category["category_name"]) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</body>
</html>
