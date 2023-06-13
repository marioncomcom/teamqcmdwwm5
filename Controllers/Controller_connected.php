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
		//récupération des données du form 
		if (isset($_POST['submit'])) {
			$theme = $_POST['theme'];
			$niveau = $_POST['niveau'];
			//on instancie le model
			$m = Model::get_model();
			//requete pour recuperer les id des question en fonction de leurs niveau et themes
			$liste_des_idquestions = $m->get_id_questions($theme, $niveau);
			//on stocke les id des questions en session 
			$_SESSION['liste_des_idquestions'] = 	$liste_des_idquestions;
			$_SESSION['niveau'] = $niveau;
			$_SESSION['score'] = 0;
			//on initialise un compteur à 0 
			$cpt = 0;
			// on passe le compteur en session 
			$_SESSION['cpt']= $cpt;
			//on passe par une vue intermédiaire afin d'appeler une autre fonction pour afficher les questions une à une
			$this->render("introduction");
		}
	}
	

}
?>