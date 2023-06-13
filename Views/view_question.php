<main class="fond_rose_quizz">

    <a href="?controller=connected&action=connected"> <img src="Content/images/logo.png" alt="logo" class="logo_quizz"></a>
    
    <h3 class="question_quizz"><?= $lib_question->lib_question ?></h3>

  <?php 
  if(!isset($_SESSION['cpt'])) {
        $_SESSION['cpt'] = 0;  
    }
    
   ?> 
<p class="compteur_question"><?php echo $_SESSION['cpt'] . "/10";   ?></p> 
<p class="compteur_question"><?php echo $bonne_reponse ; ?></p> 
<p class="compteur_question"><?php echo "Score: " . ($_SESSION['score'] ?? '0') . "/10";   ?></p> 
   

    <form action="?controller=question&action=afficher_une_question" novalidate id="formChoix" method="POST">
        <?php foreach ($lib_reponse as $reponse) : ?>
            <div class="choix">
                <label>
                    <input type="radio" name="reponse" value="<?= $reponse->lib_reponse ?>" novalidate id="reponseQuizz" onclick="labelClicked(this)">
                    <?= htmlentities($reponse->lib_reponse) ?>
                </label>
            </div>
        <?php endforeach; ?>
        <div class="ButtonSubmit">
            <button type="submit" name="next_question" class="button2" id="nextButton">SUIVANT</button>
        </div>
    
    </form>
   
    <div id="timer"></div>
</main>