
<main class="fond_rose_connexion">


  <div class="navbartitre" style=" display: flex; justify-content: center;">
            <img src="Content/images/logo.png" alt=""> 
  </div>

  <h3 class="text_connexion">Compte QUEST CALL MASTER</h3>

  <section class="w-100 pb-4 d-flex justify-content-center pb-4">

  <form id="loginForm" method="post" action="?controller=connexion&action=login">

    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form1Example1">Adresse email</label>
      <input type="email" name="email" id="form1Example1" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form1Example2">Mot de passe</label>
      <input type="password" name="password" id="form1Example2" class="form-control" />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <!-- <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Se rappeler de moi ?</label>
        </div> -->
        <a href="?controller=welcome&action=inscription">Inscrivez-vous</a>
      </div>

      <div class="col">
        <!-- Simple link -->
        <a href="#!">Mot de passe oublié ?</a>
      </div>
    </div>

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-primary btn-block" style="background-color: #FF3859; border: black">Se connecter</button>

  </form>
  </section> 

</main>





