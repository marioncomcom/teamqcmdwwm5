<?php

class Controller_question extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}
	public function action_question()
	{
		$this->render("question");
	}
}
?>