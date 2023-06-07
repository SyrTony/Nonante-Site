

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
    <h1>Nonante</h1>
    <h3>Bière Blonde</h3>
    <img src="public/images/ETIQUETTE_GROUPE.png" alt="Nonante">
    <p>Nonante est une bière sur le thème des années 90.</p>
</body>
<?php include('app/views/includes/footer.php'); ?>
</html>