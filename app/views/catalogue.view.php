<?php
session_start();
include('config/config.php');
include('app/views/includes/header.php'); //Ajouter le header en début de page
?>

  <link rel="stylesheet" href="public/css/catalogue.css">
 

  <main>

  <div class="container">

    <input type="radio" name="slide" id="objet-1" checked>
    <input type="radio" name="slide" id="objet-2">
    <input type="radio" name="slide" id="objet-3">
    <input type="radio" name="slide" id="objet-4">
    <input type="radio" name="slide" id="objet-5">
    <input type="radio" name="slide" id="objet-6">
    <input type="radio" name="slide" id="objet-7">
    <input type="radio" name="slide" id="objet-8">
    
    <div class="cards">
      
     
      <label class="card" for="objet-1" id="bière-1">
        <a href="Gammes/Fiesta.html">
          <img src="public/images/anouar.png" alt="Fiesta">
        </a>
      </label>
     
     
      <label class="card" for="objet-2" id="bière-2">
        <a href="app/views/Vibes.view.php">
          <img src="public/images/biere_vibes.png" alt="Vibes">
        </a>
      </label>
      
     
      <label class="card" for="objet-3" id="bière-3">
        <a href="Gammes/Super_Hero.html">
          <img src="public/images/marceau.png" alt="Super Hero">
        </a>
      </label>
      
     
      <label class="card" for="objet-4" id="bière-4">
        <a href="Gammes/Nostalgia.html">
          <img src="public/images/clement.png" alt="Nostalgia">
        </a>
      </label>
     
     
      <label class="card" for="objet-5" id="bière-5">
        <a href="Gammes/Moody_blue.html">
          <img src="public/images/biere_mood_blues.png" alt="Moody blue">
        </a>
      </label>
      
      
      <label class="card" for="objet-6" id="bière-6">
        <a href="Gammes/Nonante.html">
          <img src="public/images/ETIQUETTE_GROUPE.png" alt="Nonante">
        </a>
      </label>
      
      
      <label class="card" for="objet-7" id="bière-7">
        <a href="Gammes/Game_On.html">
          <img src="public/images/kishore.png" alt="Game On">
        </a>
      </label>
      
      
      <label class="card" for="objet-8" id="bière-8">
        <a href="Gammes/All_eyes_on_me.html">
          <img src="public/images/biere_all_eyez_on_me.png" alt="All eyes on me">
        </a>
      </label>
    </div>


    <!-- Boutons -->
    <div class="Boutons">
      <button onclick="document.getElementById('objet-1').checked = true">1</button>
      <button onclick="document.getElementById('objet-2').checked = true">2</button>
      <button onclick="document.getElementById('objet-3').checked = true">3</button>
      <button onclick="document.getElementById('objet-4').checked = true">4</button>
      <button onclick="document.getElementById('objet-5').checked = true">5</button>
      <button onclick="document.getElementById('objet-6').checked = true">6</button>
      <button onclick="document.getElementById('objet-7').checked = true">7</button>
      <button onclick="document.getElementById('objet-8').checked = true">8</button>
    </div>
  </div>

</main>

  <?php include('app/views/includes/footer.php'); ?>
