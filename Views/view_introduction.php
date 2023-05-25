<main>
<?php require_once 'Utils/header.php'; ?>
<h1>introduction</h1>

<?php foreach ($questions as $question) : ?>
    <div class="question">
        <!-- <h2> echo htmlspecialchars($question->question);?></h2> -->
        <!-- Ajoutez plus d'informations sur la question ici si nécessaire -->
    </div>
<?php endforeach; ?>

<?php echo "Theme choisi : " . $theme . "<br>" ; ?>
<?php echo "Niveau choisi : " . $niveau; ?>

<p>Bienvenue sur <span class="rose">Quest Call Master</span>, la destination ultime pour tous les passionnés de quizz à la recherche de défis dans les domaines du sport, de la stratégie cérébrale et du cinéma.

<span class="rose">Quest Call Master</span> est bien plus qu'un simple site de quizz. Nous sommes une communauté dynamique de curieux, de passionnés, et de compétiteurs qui cherchent à élargir leurs horizons, tester leurs connaissances et s'amuser en même temps. Que vous soyez un fin connaisseur de sport, un cerveau stratégique ou un cinéphile averti, vous trouverez ici des quizz soigneusement conçus pour stimuler votre esprit et susciter votre passion.
</p>

<div class="btn_intro">
            <form action="?controller=introduction&action=question" method="post">
                <button type="submit" id="btn_intro">Je me lance !</button>
            </form>
        </div>

<?php require_once 'Utils/footer.php'; ?>
</main>
