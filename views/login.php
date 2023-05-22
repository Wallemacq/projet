<?php
session_start();
ob_start();
?>
<form action="login.php" method="post">
  <div class="mb-3">
    <label for="login" class="form-label">Nom d'utilisateur</label>
    <input type="text" class="form-control" id="login" name="login" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php
$title = "Se connecter";
$content = ob_get_clean();
include 'template.php';
?>