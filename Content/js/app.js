//* slide images

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

// * pour ne pas commencer le QUIZ sans choisir le thtme et le niveau

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

// * pour ne pas commencer le QUIZ sans choisir le thtme et le niveau

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

// * pour faire le clic de la reponse en rouge 

function labelClicked(element) {
  var labels = document.querySelectorAll('.choix label');

  // Supprime la classe 'selected' de tous les labels
  labels.forEach(function(label) {
    label.classList.remove('selected');
  });

  // Ajoute la classe 'selected' uniquement au label cliqué
  element.parentElement.classList.add('selected');
}

//* la durée des questions

// Définir la durée en secondes
var duration = 15;

// Sélectionner les éléments HTML pertinents
var timerDisplay = document.getElementById('timer');
var nextButton = document.getElementById('nextButton');

// Démarrer le compte à rebours
var countdown = setInterval(function() {
  // Afficher le temps restant
  timerDisplay.innerText = duration;

  // Réduire le temps restant
  duration--;

  // Vérifier si le temps est écoulé
  if (duration < 0) {
    clearInterval(countdown); // Arrêter le compte à rebours
    goToNextQuestion(); // Passer à la question suivante
  }
}, 1000);

// Fonction pour passer à la question suivante
function goToNextQuestion() {
  // Effectuer ici les actions nécessaires pour passer à la question suivante
  // Par exemple, soumettre le formulaire ou effectuer une autre action de navigation
  document.getElementById('formChoix').submit();
}

