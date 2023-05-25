<?php require_once 'Utils/header.php'; ?>

<main>

  <div class="titre">
    <img src="Content/images/titre.png" alt="titre">
  </div>

  <div class="owl-carousel">
    <div><img src="Content/images/qcm.png" alt="image 2"></div>
    <div><img src="Content/images/sport.jpg" alt="image 3"></div>
    <div><img src="Content/images/cinema.png" alt="image 4"></div>
    <div><img src="Content/images/cerebrale.jpg" alt="image 5"></div>
  </div>

  <form action="?controller=connected&action=introduction" method="post" novalidate id="connexion">
  <section class="themes">
      <div class="themeseul">
        <h2>Thèmes</h2>
      </div>
      
      <div class="theme">
        <ul>
        <!-- < foreach ($themeChoix as $choix): ?> -->
          <input type="radio" id="Cinema" name="theme" value="2" class="custom-radio" required>
          <label for="Cinema">Cinema</label>
          <!-- <ph endforeach; ?> -->
          <input type="radio" id="sport" name="theme" value="1" class="custom-radio">
          <label for="sport">sport</label>
          <input type="radio" id="Cerebrale" name="theme" value="3" class="custom-radio">
          <label for="Cerebrale">Cerebrale</label>
        </ul>
      </div>
    </section>
    
    <section class="niveaux">
      <div class="niveauseul">
        <h2>Niveaux</h2>
      </div>
      <div class="niveau">
        <ul>
          <input type="radio" id="debutant" name="niveau" value="1" class="custom-radio" required>
          <label for="debutant">Debutant</label>
          <input type="radio" id="intermediaire" name="niveau" value="2" class="custom-radio">
          <label for="intermediaire">Intermédiaire</label>
          <input type="radio" id="avance" name="niveau" value="3" class="custom-radio">
          <label for="avance">Avancé</label>
        </ul>
      </div>
    </section>
    
    <input type="submit" class="button" name="submit" value="Valider">
  </form>

</main>
<?php require_once 'Utils/footer.php'; ?>