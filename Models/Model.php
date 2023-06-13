<?php

    class Model 
    {   // Début de la Classe

        private $bd ;
        
        private static $instance = null ;

        /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
        private function __construct() {  // Fonction qui sert à faire le lien avec la BDD

            $dsn = "mysql:host=localhost;dbname=projet_qcm"  ;   // Coordonnées de la BDD
            $login = "root" ;   // Identifiant d'accès à la BDD
            $mdp = "" ; // Mot de passe d'accès à la BDD
            $this->bd = new PDO($dsn, $login, $mdp) ;
            $this->bd->query("SET NAMES 'utf8'") ;
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

        }


        // get_model()

        public static function get_model() {    // Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
            if (is_null(self::$instance))
            {
                self::$instance = new Model() ;
            }
            return self::$instance ;
        }
        
        public function get_login_user($email, $password)
        {
           
            $r = $this->bd->prepare("SELECT * FROM user WHERE email_user=:email AND mdp_user=:password ");
            $r->bindParam(':email', $email);
            $r->bindParam(':password', $password);
            $r->execute();

            $user = $r->fetch(PDO::FETCH_OBJ);

            return $user;
           
        }

        public function get_id_questions($theme, $niveau) {
            $_SESSION['theme'] = $theme;
            $_SESSION['niveau'] = $niveau;
        
            $stmt = $this->bd->prepare("SELECT id_question FROM question WHERE id_theme = :theme AND niveau_question = :niveau ORDER BY RAND() LIMIT 20");
            $stmt->bindParam(':theme', $_SESSION['theme']);
            $stmt->bindParam(':niveau', $_SESSION['niveau']);
            $stmt->execute();
        
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

     
     
        public function get_afficher_une_question($idquestion)
        {
            $r = $this->bd->prepare("SELECT lib_question FROM question WHERE id_question=:id_question");
            $r->bindParam(':id_question', $idquestion);
            $r->execute();
           
            
            return  $r->fetch(PDO::FETCH_OBJ);
        }
     

        public function get_afficher_une_reponse($idquestion)
        {
            $r = $this->bd->prepare("SELECT id_reponse, lib_reponse, bonne_reponse FROM reponse WHERE id_question=:id_question");
            $r->bindParam(':id_question', $idquestion);
            $r->execute();
        
            return  $r->fetchAll(PDO::FETCH_OBJ);
        }
        

        // inscription
       public function get_inscription($nom, $prenom, $email, $password)
       {
           $r = $this->bd->prepare("INSERT INTO user (nom_user, prenom_user, email_user, mdp_user) VALUES (:nom, :prenom, :email, :password)");
           $r->bindParam(':nom', $nom);
           $r->bindParam(':prenom', $prenom);
           $r->bindParam(':email', $email);
           $r->bindParam(':password', $password);
           $r->execute();


       
        }

    }   // Fin de la Classe