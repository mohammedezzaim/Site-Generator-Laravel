// document.addEventListener('DOMContentLoaded', function() {
//             const navbarSelect = document.getElementById('navbar');
//             const navbarImage = document.getElementById('navbar-image'); // Sélectionne l'image à mettre à jour

//             // Fonction pour mettre à jour l'image en fonction du navbar sélectionné
//             navbarSelect.addEventListener('change', function() {
//                 const selectedNavbar = navbarSelect.value; // Récupère l'ID du navbar sélectionné

//                 // Si une navbar est sélectionnée, mettre à jour l'image
//                 if (selectedNavbar) {
//                     navbarImage.src = `{{ asset('navbars-image/') }}/${selectedNavbar}.png`; // Met à jour le chemin de l'image
//                     navbarImage.alt = selectedNavbar; // Met à jour le texte alternatif de l'image
//                 }
//             });

//             // Mettre à jour l'image par défaut (iLanding) au chargement de la page
//             navbarSelect.value = "iLanding"; // Assurez-vous que iLanding est sélectionné
//             navbarImage.src =
//                 `{{ asset('navbars-image/iLanding.png') }}`; // Affiche l'image correspondante à iLanding
//             navbarImage.alt = 'iLanding'; // Met à jour le texte alternatif
//         });
