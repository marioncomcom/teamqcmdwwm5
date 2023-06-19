<?php

class Controller_home extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_home()
	{
		$this->render("home");
	}

	public function action_inscription()
	{
		$this->render("inscription");
	}

	public function action_connexion()
	{
		$this->render("connexion");
	}
	
}
?>