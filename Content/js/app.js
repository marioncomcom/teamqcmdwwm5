// ---------images----------------
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000, // Durée en millisecondes entre chaque défilement
      items: 1,
      nav: false,
      dots: false
    });
  });


  const startQuizzForm = document.querySelector('#startQuizz');

if (startQuizzForm) {
  startQuizzForm.addEventListener('submit', function (event) {
    const themeInputs = document.querySelectorAll('input[name="theme"]');
    const niveauInputs = document.querySelectorAll('input[name="niveau"]');

    let themeSelected = false;
    let niveauSelected = false;

    themeInputs.forEach(function (input) {
      if (input.checked) {
        themeSelected = true;
      }
    });

    niveauInputs.forEach(function (input) {
      if (input.checked) {
        niveauSelected = true;
      }
    });

    if (!themeSelected || !niveauSelected) {
      event.preventDefault();
      alert('Veuillez sélectionner un thème et un niveau');
    }
  });
}

const formChoix = document.getElementById('formChoix');
if (formChoix) {
  formChoix.addEventListener('submit', function (event) {
    const questionInputs = document.querySelectorAll('input[name="reponse"]');
    let questionSelected = false;

    questionInputs.forEach(function (input) {
      if (input.checked) {
        questionSelected = true;
      }
    });

    if (!questionSelected) {
      event.preventDefault();
      alert('Veuillez sélectionner une réponse');
    }
  });
}


function labelClicked(element) {
  var labels = document.querySelectorAll('.choix label');

  // Supprime la classe 'selected' de tous les labels
  labels.forEach(function(label) {
    label.classList.remove('selected');
  });

  // Ajoute la classe 'selected' uniquement au label cliqué
  element.parentElement.classList.add('selected');
}
