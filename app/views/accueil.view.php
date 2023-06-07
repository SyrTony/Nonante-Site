<?php
include('config/config.php');
include('app/views/includes/header.php');
?>

<link rel="stylesheet" type="text/css" href="public/css/style.css">

<main>
    <section class="entrée">
        <img src="public/images/background-batiment-blur.jpg" alt="Image de bienvenue">
        <h1>Bienvenue chez Nonante !</h1>
    </section>
    <section class="présentation">
        <?php
        echo "<div><h2>C'est quoi les bières Nonante ?</h2></div>";
        echo '<div class="paragraphs-container">';
        echo '<p class="centered-paragraph">Chez Nonante, la qualité est notre priorité.
        Nos bières artisanales sont brassées avec soin, en utilisant des ingrédients de première qualité.</p>';
        echo '<p class="centered-paragraph">Chez Nonante, qualité rime avec environnement. Des bières durables et respectueuses de la planète pour une meilleur exploitation.</p>';
        echo "<p class='centered-paragraph'>Chez Nonante, le goût c'est aussi primordial.
        Les bières que nous proposons ont toutes des goûts capable de vous faire découvrir de nouvelles saveurs.</p>";
        echo '</div>';
        ?>
    </section>

    <section class="vitrine">
    <h2>Voici notre sélection de bières :</h2>

        <?php
        if (!empty($bieres)) {
            echo '<form action="bon-de-commande.php" method="POST">';
            echo '<div class="vitrine">';
            $counter = 0;
            foreach ($bieres as $biere) {
                if ($counter % 3 === 0 && $counter !== 0) {
                    echo '</div><div class="vitrine">';
                }
                echo '<div class="biere">';
                echo '<h3>' . $biere['nom'] . '</h3>';
                echo '<p>Description : ' . $biere['description'] . '</p>';
                echo '<p>Prix : ' . $biere['prix'] . ' €</p>';
                echo '<p>Quantité disponible : ' . $biere['quantite'] . '</p>';
                echo '<img src="public/images/' . $biere['image'] . '" alt="' . $biere['nom'] . '">';
                echo '<input type="hidden" name="biere_id[]" value="' . $biere['id'] . '">';
                echo '<input type="number" name="quantite[]" min="0" max="' . $biere['quantite'] . '" value="0" required>';
                echo '</div>';
                $counter++;
            }
            echo '</div>';

            echo '<input type="submit" value="Valider la commande">';
            echo '</form>';
        } else {
            echo "<p>Aucune bière disponible pour le moment.</p>";
        }
        ?>
    </section>

</main>

<?php include('app/views/includes/footer.php'); ?>