<?php

class Controller_question extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_afficher_une_question(){

		$liste_question = $_SESSION['liste_des_idquestions'];
		$cpt = $_SESSION["cpt"]++;
		$idquestion = $liste_question[$cpt]->id_question;
	
		$m=model::get_model();
		$libelle_question = $m->get_afficher_une_question($idquestion);
		$libelle_reponse=$m->get_afficher_une_reponse($idquestion);

	// !----------------------------------------------------------------------
	// Ici on vérifie la réponse de l'utilisateur
	$bonnes_reponses = array_filter($libelle_reponse, function($reponse) {
		return $reponse->bonne_reponse == 1;
	});
	$bonne_reponse = $bonnes_reponses[0]->lib_reponse;

	if (isset($user_response) && $user_response == $bonne_reponse) {
		$_SESSION['score']++;
	}
	// !----------------------------------------------------------------------
	$data = [
			'lib_question' => $libelle_question,
			'lib_reponse' => $libelle_reponse,
			'bonne_reponse' => $bonne_reponse,
			
		];

		if (isset($_POST['reponse'])){
			$selectedAnswer = $_POST['reponse'];
			// initialisation du score pour cette question
			$scorePourCetteQuestion = 0;
			foreach($libelle_reponse as $reponse) {
				if ($reponse->id_reponse == $selectedAnswer && $reponse->bonne_reponse == 1) {
					// Si la réponse sélectionnée est la bonne, augmenter le score pour cette question
					$scorePourCetteQuestion = 1;
					var_dump($selectedAnswer);
					break;
				}
			}
			
			// Ajouter le score pour cette question au score total
			$_SESSION['score'] += $scorePourCetteQuestion;
		}
		
		


		//on incrémente le compteur après avoir vérifié la réponse
		$cpt++;
		//on renvoie maintenant le compteur dans son état actuel en session
		$_SESSION['cpt']=$cpt;
	

	
		// on revoie le tout ver la vue question, si le compteur est a 11 alors il est diriger vers la vue resultat
		if($cpt === 10){
			$data ["total"] = $_SESSION['score'];
			$this->render('resultat',$data);
			// Réinitialiser le score après avoir affiché le résultat
			$_SESSION['score'] = 0;
		}else{
			$this->render("question", $data);
		}
		
	
	}
	
	

}
?>