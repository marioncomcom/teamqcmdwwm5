
    <main class="fond_rose_quizz">

            <img src="Content/images/logo.png" alt="logo" class="logo_quizz">   

            <h3 class="question_quizz"><?= $lib_question->lib_question ?></h3>
      

        <form action="?controller=question&action=afficher_une_question" novalidate id="formChoix" method="POST">
            <?php foreach ($lib_reponse as $reponse) : ?>
                <div class="choix">
                    <label>
                    <input type="radio" name="reponse" value="<?= $reponse->type ?>" novalidate id="reponseQuizz" onclick="labelClicked(this)">
                        <?= htmlentities($reponse->lib_reponse) ?>
                    </label>
                </div>
            <?php endforeach; ?>

            <div class="ButtonSubmit">
                <button type="submit" name="next_question" class="button2">SUIVANT</button>
            </div>
        </form>



    </main>
