<?php
require_once('config/config.php');
require_once('app/models/db-connect.model.php');
require_once('app/models/get-bieres.model.php');

$connexion = connectDB($dbUser, $dbPass);

$bieres = getBieresFromDatabase($dbUser, $dbPass);

$connexion = null;