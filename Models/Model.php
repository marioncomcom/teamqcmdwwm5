<?php

    class Model 
    {   // Début de la Classe

        private $bd ;
        
        private static $instance = null ;

        /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
        public function __construct() {  // Fonction qui sert à faire le lien avec la BDD

            try {
                $dsn = "mysql:host=localhost;dbname=projet_qcm"  ;   // Coordonnées de la BDD
                $login = "root" ;   // Identifiant d'accès à la BDD
                $mdp = "" ; // Mot de passe d'accès à la BDD
                $this->bd = new PDO($dsn, $login, $mdp) ;
                $this->bd->query("SET NAMES 'utf8'") ;
                $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
                echo "Connected successfully!";
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
            

            //define("DB_SERVER","localhost");
            //define("DB_USERNAME","root");
            //define("DB_PASSWORD","");
            //define("DB_DATABASE","projet_qcm");
            //if(!mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD)){
              //  echo"Failure";
            //}
            //else{
              //  echo"Success!";
            //}
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
            $r = $this->bd->prepare("SELECT * FROM user WHERE email_user=:email AND mdp_user=:password");
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
        
            // Vérifier les erreurs de requête
            $errorInfo = $r->errorInfo();
            if ($errorInfo[0] !== PDO::ERR_NONE) {
                // Afficher les détails de l'erreur
                echo "Erreur de requête : " . $errorInfo[2];
            }
        }
        
        




   // Supprimer un compte

    // ...
    public function deleteUser($id_user)
    {
        try {
            $UserModel = "DELETE FROM user WHERE id_user = :id_user";
            $r = $this->bd->prepare($UserModel);
            $r->bindParam(':id_user', $id_user);
            $r->execute();
            echo "Utilisateur supprimé avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de l'utilisateur : " . $e->getMessage();
        }
    }
    
}

    // ...


    // ...




    


        


       // Fin de la Classe



