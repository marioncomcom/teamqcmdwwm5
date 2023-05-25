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

	public function action_introduction()
	{
		if (isset($_POST['submit'])) {
			$theme = $_POST['theme'];
			$niveau = $_POST['niveau'];
	
			$m = Model::get_model();
			$questions = $m->get_selection_question($theme, $niveau);
		
			$this->render("introduction", ['theme' => $theme, 'niveau' => $niveau, 'questions' => $questions]);
		}
	}
	

}
?>