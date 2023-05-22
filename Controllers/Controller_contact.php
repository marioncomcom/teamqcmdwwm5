<?php

class Controller_contact extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}
	public function action_contact()
	{
		$this->render("contact");
	}

	
}
?>