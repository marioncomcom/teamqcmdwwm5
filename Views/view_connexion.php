<?php require_once 'Utils/header.php'; ?>

<h1>connexion</h1>
<section class="w-100 pb-4 d-flex justify-content-center pb-4">

<form id="loginForm" method="post" action="?controller=connected&action=connected">

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Adresse email</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Mot de passe</label>
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
  <button type="submit" class="btn btn-primary btn-block" style="background-color: #FF3859; border: black">Connexion</button>

</form>
</section>

<!-- <script>
document.getElementById("loginForm").addEventListener("submit", function(event){
  event.preventDefault();

  const email = document.getElementById("form1Example1").value;
  const password = document.getElementById("form1Example2").value;

  // Check if the email and password match your condition
  if(email != 'correctEmail@example.com' || password != 'correctPassword'){
    // If they don't match show an alert message
    alert('Invalid email or password. Please try again.');
  } else {
    // If they match redirect user or perform another action
    // For example:
    // window.location.href = '/homepage';
  }
});
</script> -->

</body>
<?php require_once 'Utils/footer.php'; ?>
