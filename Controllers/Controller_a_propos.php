<?php

class Controller_a_propos extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}
	public function action_a_propos()
	{
		$this->render("a_propos");
	}
}
?>