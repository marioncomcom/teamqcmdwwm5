<?php

class Controller_inscription extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_inscription()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {



            // Valider et sécuriser les données en provenance du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $m = Model::get_model();
            $m->get_inscription($nom, $prenom, $email, $password);
            $this->render("connexion");

        }else{
            $this->render("inscription");

            // Vérifier si on a un utilisateur

        }
    }
}

?>