<?php require_once 'Utils/header.php'; ?>
<main>

    <h1>Supprimer le compte utilisateur</h1>
    
    <p>Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.</p>
    
    <form action="?controller=profil&action=delete" method="post">
    <input type="hidden" name="id_user" value="<?php echo isset($_SESSION['id_user']) ? $_SESSION['id_user'] : ''; ?>">
    <input type="submit" value="Supprimer mon compte" />
    </form>




</main>

<?php //require_once 'Utils/footer.php'; ?>

