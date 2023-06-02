<main class="fond_rose_inscription">

    <img src="Content/images/logo.png" alt="logo" class="logo_connexion">
    <h3 class="text_inscription">Créer un compte QUEST CALL MASTER</h3>
    <section class="w-100 pb-4 d-flex justify-content-center pb-4">
        <form id="inscriptionForm" method="post" action="?controller=inscription&action=inscription">
            <!-- Nom input -->
            <div class="form-outline mb-4">
                <input type="text" name="nom" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Nom</label>
            </div>

            <!-- Prénom input -->
            <div class="form-outline mb-4">
                <input type="text" name="prenom" id="form1Example2" class="form-control" />
                <label class="form-label" for="form1Example2">Prénom</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form1Example3" class="form-control" />
                <label class="form-label" for="form1Example3">Adresse email</label>
            </div>

            <!-- Mot de passe input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form1Example4" class="form-control" />
                <label class="form-label" for="form1Example4">Mot de passe</label>
            </div>

            <div class="row mb-4">
        <a href="?controller=home&action=connexion">Connectez-vous</a>
        </div>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block" style="background-color: #FF3859; border: black">S'inscrire</button>
        </form>
    </section>

</main>
