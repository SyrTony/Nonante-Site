

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
  <link rel="shortcut icon" href="public/images/biere_fiesta.png />
</head>

<body>
    <h1>Fiesta</h1>
    <h3>Bière Blonde</h3>
    <img src="public/images/anouar.png" alt="Fiesta">
    <p>Fiesta est une bière sur le thème du cinéma des années 90.</p>
</body>


<?php include('app/views/includes/footer.php'); ?>
</html>