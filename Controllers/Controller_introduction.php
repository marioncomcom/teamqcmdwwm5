<?php

class Controller_introduction extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}
	
	public function action_introduction()
	{
		$this->render("introduction");
	}

	
}
?>