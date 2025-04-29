(function () {
  console.log("carrousel.js");

  const hero__radio__input = document.querySelectorAll(".hero__radio__input");
  const hero__carrousel = document.querySelectorAll(".hero__carrousel");
  let currentIndex = 0; // Index de l'image actuellement affichée
  const intervalTime = 5000; // Temps en millisecondes (5 secondes)

  console.log("Nombre de boutons radio :", hero__radio__input.length);
  console.log("Nombre de hero__carrousel :", hero__carrousel.length);

  // Fonction pour activer un slide
  function activateSlide(index) {
    // Désactiver tous les hero__carrousel
    hero__carrousel.forEach((slide) => {
      slide.style.opacity = "0";
      slide.style.zIndex = "-1";
    });

    // Activer le slide correspondant
    hero__carrousel[index].style.opacity = "1";
    hero__carrousel[index].style.zIndex = "1";

    // Mettre à jour le bouton radio correspondant
    hero__radio__input.forEach((hero__radio__input, i) => {
      hero__radio__input.checked = i === index;
    });

    currentIndex = index; // Mettre à jour l'index actuel
  }

  // Ajouter un événement pour chaque bouton radio
  hero__radio__input.forEach((radio, index) => {
    radio.addEventListener("click", () => {
      activateSlide(index);
    });
  });

  // Changer automatiquement les hero__carrousel toutes les 5 secondes
  setInterval(() => {
    const nextIndex = (currentIndex + 1) % hero__carrousel.length; // Passer au slide suivant
    activateSlide(nextIndex);
  }, intervalTime);

  // Initialiser le carrousel avec le premier slide
  activateSlide(currentIndex);
})();