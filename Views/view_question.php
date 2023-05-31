


    <main id="mainQuestions">

       
            <h3><?= $lib_question->lib_question ?></h3>
      

        <form action="?controller=question&action=afficher_une_question" id="formChoix" method="POST">
            <?php foreach ($lib_reponse as $reponse) : ?>
                <div class="choix">
                    <label>
                        <input type="radio" name="reponse" value="<?= $reponse->type ?>" novalidate id="qestionQuizz">
                        <?= htmlentities($reponse->lib_reponse) ?>
                    </label>
                </div>
            <?php endforeach; ?>

            <div class="ButtonSubmit">
                <button type="submit" name="next_question" class="Submit">SUIVANT</button>
            </div>
        </form>



    </main>
