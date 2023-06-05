<main class="fond_rose_inscription">
    
    <div class="navbartitre" style="display: flex; justify-content: center;">
        <img src="Content/images/logo.png" alt=""> 
    </div>
    <h3 class="text_inscription">Créer un compte QUEST CALL MASTER</h3>
    <section class="w-100 pb-4 d-flex justify-content-center pb-4">
    <form id="inscriptionForm" method="post" action="?controller=inscription&action=inscription">
                <!-- Nom input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example1">Nom</label>
                    <input type="text" name="nom" id="form1Example1" class="form-control" />
                </div>

                <!-- Prénom input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example2">Prénom</label>
                    <input type="text" name="prenom" id="form1Example2" class="form-control" />
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example3">Adresse email</label>
                    <input type="email" name="email" id="form1Example3" class="form-control" />
                </div>

                <!-- Mot de passe input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example4">Mot de passe</label>
                    <input type="password" name="password" id="form1Example4" class="form-control" />
                </div>

                <div class="row mb-4">
            <a href="?controller=home&action=connexion">Connectez-vous</a>
            </div>

                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="background-color: #FF3859; border: black">S'inscrire</button>
            </form>
    </section>

</main>
