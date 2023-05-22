<?php

class Controller_connected extends Controller
{
    public function action_default()
	{
		$this->action_home();
	}
	public function action_connected()
	{
		$this->render("connected");
	}
}
?>