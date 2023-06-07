<?php
session_start();
include('config/config.php');  //ici on n'a pas besoin de header car c'est la page qui vérifie si on est majeur
?>


    <link rel="stylesheet" href="public/css/majeur.css">
    <title>Accès refusé</title>

    <img src="public/images/LOGO_90.png" alt="Logo Nonante">
    <h1>Accès refusé</h1>
    <h2>Nous ne pouvons pas vous laisser accéder à nos produits, dommage pour vous.</h2>
    <h3>Revenez quand vous serez majeur...</h3>
    <h3>En attendant faites de choses de personnes de votre âge, moi à votre âge je regardais foot 2 rue, nous ne sommes pas les mêmes.</a></h3>
    
    <?php include('app/views/includes/footer.php'); ?>