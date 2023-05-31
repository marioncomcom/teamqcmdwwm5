<?php

    class Model 
    {   // Début de la Classe

        private $bd ;
        
        private static $instance = null ;

        /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
        private function __construct() {  // Fonction qui sert à faire le lien avec la BDD

            try {
            $dsn = "mysql:host=localhost;dbname=projet_qcm"  ;   // Coordonnées de la BDD
            $login = "root" ;   // Identifiant d'accès à la BDD
            $mdp = "" ; // Mot de passe d'accès à la BDD
            $this->bd = new PDO($dsn, $login, $mdp) ;
            $this->bd->query("SET NAMES 'utf8'") ;
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
            } catch (\Throwable $th) {
                //throw $th;
                die("Pb de connexion DB");
            }

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
            // attention dans la bdd les mdp ne doivent pas être stockés en clair

            // étapes
            // vérifier si l'email du user existe en BDD
            // si pas de user return null
            // si un user est trouvé
            // vérifier si le mdp en clair venant du formulaire matche avec le mdp du user trouvé en BDD
            // si pas de match return null
            // sinon return user
            $r = $this->bd->prepare("SELECT * FROM user WHERE email_user=:email AND mdp_user=:password ");
            $r->bindParam(':email', $email);
            $r->bindParam(':password', $password);
            $r->execute();

            $user = $r->fetch(PDO::FETCH_OBJ);

            return $user;
           
        }




    }   // Fin de la Classe