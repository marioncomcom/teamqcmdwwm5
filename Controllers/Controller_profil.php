<?php

class Controller_profil extends Controller
{
    public function action_default()
    {
        $this->action_profil();
    }

    public function action_profil()
    {
        $this->render("profil");
    }

    public function action_delete()
    {
        // Vérifiez l'authentification de l'utilisateur ici
        // ...
    
        // Récupérer l'ID de l'utilisateur à supprimer depuis la requête POST
        $id_user = $_POST['id_user'];

        // pour debug only, à supprimer par la suite
    
        // Appeler la méthode du modèle pour supprimer l'utilisateur
        $userModel = new Model();
        $userModel->deleteUser($id_user);

        

        // destruction de la session pour cet utilisateur

        // destruction du fichier de session
        session_destroy();

        // destruction des variables de session
        session_unset();
    



        // Rediriger vers la page login ou afficher un message de succès
        // ...

        // tester la rediraction avec un header Location vers home
        header("Location: ?controller=home&action=home");
      
    }
    
}

      ?>
      
    


    
    



