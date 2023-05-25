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
            $r = $this->bd->prepare("SELECT * FROM user WHERE email=:email");
            $r->bindParam(':email', $email);
            $r->execute();
            if ($r->rowCount() > 0) {
                $user = $r->fetch();
                if(password_verify($password, $user['password'])){
                    return $user;
                }else {
                    return false;
                }
            }
        }

        public function get_selection_question($theme, $niveau)
        {
            $stmt = $this->bd->prepare("SELECT * FROM question WHERE id_theme = :theme AND niveau_question = :niveau ORDER BY RAND() LIMIT 20");
            $stmt->bindParam(':theme' , $theme);
            $stmt->bindParam(':niveau' , $niveau);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }





    }   // Fin de la Classe