<?php

class Controller_connexion extends Controller
{
    public function action_default()
	{
		$this->action_home();
	}

	public function action_login()
	{
		if(isset($_POST["submit"])) {
			$m = Model::get_model();

			// valider et sécuriser les données en provenance du formulaire
			$email = $_POST['email'];
			$password = $_POST['password'];
			$user = $m->get_login_user($email, $password);

			// vérifier si on un user
			if(!$user) {
				$this->render("connexion");
				exit;
			}
			$_SESSION["id_user"] = $user->id_user;
				$this->render("connected");

			}else{
				$this->render("connexion");
			}
	
	}
}

?>