
<?php
session_start();
include('config/config.php');
include('app/views/includes/header.php'); //Ajouter le header en début de page
?>
<!DOCTYPE html>
<html>
<head>
  <title>Nonante</title>
  <link rel="stylesheet" href="public/css/gammes.css">
  <link rel="shortcut icon" href="public/images/favicon.ico" />
</head>

<body>
    <h1>All eyes on me</h1>
    <h3>Bière Blonde</h3>
    <img src="public/images/biere_all_eyez_on_me.png" alt="All eyes on me">
    <p>All Eyes On Me est une bière sur le thème de l'essor du rap dans les années 90.</p>
</body>

<?php include('app/views/includes/footer.php'); ?>
</html>
