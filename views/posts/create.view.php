<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Izveidot bloga ierakstu!</h1>

<form method="POST">
  <label for="content">Ievadiet saturu:</label>
  
 
  <input type="text" id="content" name="content" value="<?= $_POST['content'] ?? '' ?>" required maxlength="50" />
  

  <?php if (isset($errors['content'])): ?>
      <p style="color: red;"><?= $errors['content'] ?></p>
  <?php endif; ?>

  <button type="submit">Saglabāt izmaiņas</button>
</form>


