<?php session_start();
ob_start();
?>

<form action="inscription.php" method="post">
  <input type="hidden" name="id" value="<?php echo $user['id'] ?? '' ?>">
  <div class="mb-3">
    <label for="login" class="form-label">Nom d'utilisateur</label>
    <input type="text" class="form-control" id="login" name="login" value="<?php echo $user['login'] ?? '' ?>" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">S'enregistrer</button>
</form>


<?php
$title = "S'enregistrer";
$content = ob_get_clean();
include 'template.php';
?>