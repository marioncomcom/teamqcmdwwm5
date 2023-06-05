<?php require_once 'Utils/header.php'; ?>
<main class="fond_introduction">

    <div class="text_intro">
        <p>Bienvenue sur <span class="rose">Quest Call Master</span>.</p>
        <br>
        <p>Préparez-vous au 16 questions et <span class="rose">FAITES TRES ATTENTION ⚠️ AU COMPTES A REBOURS</span> à chaque questions.</p> 
        <p>  Dès que vous cliquer sur <span class="rose">"Je me lance !"</span> le compte à rebours est lancé.</p>
        <p><span class="rose">ETES VOUS PRET !?</span> </p>

        <div class="btn_intro">
            <form action="?controller=question&action=afficher_une_question" class="button_introduction" method="post">
                <button type="submit" name="submit" class="button">Je me lance !</button>
            </form>
        </div>

    </div>

</main>
<?php require_once 'Utils/footer.php'; ?>


