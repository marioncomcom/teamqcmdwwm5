<?php

class Controller_question extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_afficher_une_question(){

		$liste_question = $_SESSION['liste_des_idquestions'];
		$cpt = $_SESSION['cpt'];
		$idquestion = $liste_question[$cpt]->id_question;
	
		$m=model::get_model();
		$libelle_question = $m->get_afficher_une_question($idquestion);
		$libelle_reponse=$m->get_afficher_une_reponse($idquestion);
		//on incrémente le compteur à chaque fois qu'il récupère une nouvelle question
		$cpt++;
		//on renvoie maintenant le compteur dans son état actuel en session
		$_SESSION['cpt']=$cpt;
		// o,stocke les données de nos 2 requete dans $data
		$data=['lib_question'=> $libelle_question,
				'lib_reponse'=> $libelle_reponse ];
		// on revoie le tout ver la vue question, si le compteur est a 11 alors il est diriger vers la vue resultat
		if($cpt === 10){
			$this->render('resultat',$data);
		}else{
			$this->render("question", $data);
		}
		
	}

}
?>