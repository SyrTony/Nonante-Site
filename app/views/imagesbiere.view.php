<?php
include('config/config.php');
include('app/models/imagesbiere.model.php');

if ($result->num_rows > 0) {
    // Afficher l'image
    while ($row = $result->fetch_assoc()) {
        $imagePath = $row['Image'];
        echo '<div class="info"="height:300px;
        display: inline-block;
        margin-left: auto;
        margin-right: auto;
        padding-top: 10px;"><img src="public/images/' . $imagePath . '" alt="Bière aléatoire" </div>';
    }
} else {
    echo "Aucune image trouvée dans la base de données.";
}

?>
