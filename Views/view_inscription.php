<h1>Inscription</h1>

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

        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-primary btn-block" style="background-color: #FF3859; border: black">S'inscrire</button>
    </form>
</section>