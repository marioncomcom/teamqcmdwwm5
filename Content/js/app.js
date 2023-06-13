//* slide images
// Ce code est exécuté une fois que le document est complètement chargé
$(document).ready(function(){
  // Initialise la glissière d'images
  $(".owl-carousel").owlCarousel({
      loop: true, // fait défiler les images en boucle
      autoplay: true, // fait défiler les images automatiquement
      autoplayTimeout: 3000, // délai entre chaque défilement en millisecondes
      items: 1, // nombre d'images affichées
      nav: false, // n'affiche pas les boutons de navigation
      dots: false // n'affiche pas les indicateurs de pagination
  });
});

// * pour faire le clic de la reponse en blanc
// Cette fonction est appelée lorsque l'utilisateur clique sur une réponse
// Elle met en surbrillance la réponse sélectionnée
function labelClicked(element) {
  var labels = document.querySelectorAll('.choix label');

  // Parcourt tous les labels et supprime la classe 'selected'
  labels.forEach(function(label) {
      label.classList.remove('selected');
  });

  // Ajoute la classe 'selected' au label qui a été cliqué
  element.parentElement.classList.add('selected');
}

//* le compte a rebours des questions & pour ne pas commencer le QUIZ sans choisir le thtme et le niveau
// Cette fonction est exécutée lorsque la page est complètement chargée
window.onload = function() {
  const startQuizzForm = document.querySelector('#startQuizz'); // sélectionne le formulaire de démarrage du quiz
  const formChoix = document.getElementById('formChoix'); // sélectionne le formulaire de choix de réponse
  const timerDisplay = document.getElementById('timer'); // sélectionne l'élément qui affiche le timer
  let countdown; // variable pour le compte à rebours
  let duration = sessionStorage.getItem('duration') || 0; // récupère la durée du compte à rebours à partir de la session de l'utilisateur

  // Si le formulaire de démarrage du quiz existe
  if (startQuizzForm) {
      startQuizzForm.addEventListener('submit', function (event) {
          const themeInputs = document.querySelectorAll('input[name="theme"]'); // sélectionne tous les boutons radio du thème
          const niveauInputs = document.querySelectorAll('input[name="niveau"]'); // sélectionne tous les boutons radio du niveau

          let themeSelected = false; // variable pour vérifier si un thème a été sélectionné
          let niveauSelected = false; // variable pour vérifier si un niveau a été sélectionné

          // Parcourt tous les boutons radio du thème
          // Si l'un d'eux est coché, met à jour la variable 'themeSelected' à true
          themeInputs.forEach(function (input) {
              if (input.checked) {
                  themeSelected = true;
              }
          });

          // Parcourt tous les boutons radio du niveau
          // Si l'un d'eux est coché, met à jour la variable 'niveauSelected' à true et définit la durée du compte à rebours en fonction du niveau
          niveauInputs.forEach(function (input) {
              if (input.checked) {
                  niveauSelected = true;
                  if (input.value == '1') { // débutant
                      duration = 60;
                  } else if (input.value == '2') { // intermediaire
                      duration = 30;
                  } else { // avancée
                      duration = 15;
                  }
                  sessionStorage.setItem('duration', duration); // enregistre la durée du compte à rebours dans la session de l'utilisateur
              }
          });

          // Si aucun thème ou niveau n'a été sélectionné, affiche une alerte et empêche l'envoi du formulaire
          if (!themeSelected || !niveauSelected) {
              event.preventDefault();
              alert('Veuillez sélectionner un thème et un niveau');
          }
      });
  }

  // Si le formulaire de choix de réponse existe
  if (formChoix) {
      formChoix.addEventListener('submit', function (event) {
          const questionInputs = document.querySelectorAll('input[name="reponse"]'); // sélectionne tous les boutons radio de réponse
          let questionSelected = false; // variable pour vérifier si une réponse a été sélectionnée

          // Parcourt tous les boutons radio de réponse
          // Si l'un d'eux est coché, met à jour la variable 'questionSelected' à true
          questionInputs.forEach(function (input) {
              if (input.checked) {
                  questionSelected = true;
              }
          });

          // Si aucune réponse n'a été sélectionnée, affiche une alerte et empêche l'envoi du formulaire
          if (!questionSelected) {
              event.preventDefault();
              alert('Veuillez sélectionner une réponse');
          }
      });
  }

  // Si l'élément qui affiche le timer existe
  if (timerDisplay) {
      // Démarre le compte à rebours
      countdown = setInterval(function() {
          timerDisplay.innerText = duration; // affiche le temps restant
          duration--; // décrémente le temps restant

          // Si le temps est écoulé
          if (duration < 0) {
              clearInterval(countdown); // arrête le compte à rebours
              goToNextQuestion(); // passe à la question suivante
          }
      }, 1000);
  }

  // Cette fonction est appelée lorsque le temps est écoulé
  // Elle passe à la question suivante en soumettant le formulaire de choix de réponse
  function goToNextQuestion() {
      if (formChoix) {
          formChoix.submit();
      }
  }
}
