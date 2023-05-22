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
			$email = $_POST['email'];
			$password = $_POST['password'];
			$user = $m->get_login_user($email, $password);

	}else{
		header('Location: ?controller=welcome&action=connexion');
	}
	header('Location: ?controller=home&action=home');
}

}

?>