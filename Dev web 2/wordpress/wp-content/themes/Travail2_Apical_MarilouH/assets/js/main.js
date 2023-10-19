//////////////////////////////////////////////////////////////////////////////
// Dropdown NavBar ///////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
let dropdown_nav_links = document.querySelectorAll('.dropdown_nav_link');
let dropdown = document.querySelectorAll('.dropdown');


dropdown_nav_links.forEach(function (i) {
    i.addEventListener('mouseenter', rajouterVisible);
    i.addEventListener('mouseleave', enleverVisible);
});

dropdown.forEach(function (j) {
    j.addEventListener('mouseenter', resterVisible);
    j.addEventListener('mouseleave', enleverVisible);
})

/**
 * Rajoute la classe .visible 
 *
 * @param {Event} event Événement qui a déclenché l'appel de la fonction.
 */
function rajouterVisible(event) {
    let dropdown = event.target.nextElementSibling; // Sélectionne l'élément sibling suivant (le dropdown)
    if (!dropdown.classList.contains('visible')) {
        dropdown.classList.add('visible');
    }
}

/* Retire la classe visible
*
* @param {Event} event Événement qui a déclenché l'appel de la fonction.
*/
function enleverVisible(event) {
    let dropdown = event.target.nextElementSibling; // Sélectionne l'élément sibling suivant (le dropdown)
    if (dropdown.classList.contains('visible')) {
        dropdown.classList.remove('visible');
    }
}

/* 
*Garde en place la classe visible
*
* @param {Event} event Événement qui a déclenché l'appel de la fonction.
*/
function resterVisible(event) {
    let dropdown = event.target;
    if (dropdown && !dropdown.classList.contains('visible')) {
        dropdown.classList.add('visible');
    }
}


//////////////////////////////////////////////////////////////////////////////
// Collapsible Section ///////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////


var coll = document.getElementsByClassName('collapsible');
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener('click', displayCollapse);
}

/* 
* Permet l'action collapse lorsqu'on clique sur le titre d'un chapitre
*
* @param {Event} event Événement qui a déclenché l'appel de la fonction.
*/
function displayCollapse(event) {
    this.classList.toggle('active');
    var content = event.target.nextElementSibling;
     if (content.style.display === 'block' || content.style.display === '') {
        content.style.display = 'none';
    } else {
        content.style.display = 'block';
    }
}


// Récupérer tous les chapitres et le bouton
var chapitres = document.querySelectorAll('.collapse_chapitre');
var toggleButton = document.querySelector('.bouton_developper');
// Variable pour suivre l'état actuel des chapitres
var chapitresOuverts = false;

/* 
* Permet l'action collapse tous les chapitres en même temps lorsqu'on clique sur le bouton Tout Développer
*
*/
function expandAll() {
    // Inverser l'état des chapitres
    chapitresOuverts = !chapitresOuverts;
        
    // Parcourir tous les chapitres et les ouvrir/fermer en fonction de l'état
    chapitres.forEach(function(chapitre) {
        var contenu = chapitre.querySelector('.collapse_liste');
        if (chapitresOuverts) {
            // Ouvrir le chapitre
            chapitre.classList.add('active');
            contenu.style.display = 'block';
        } else {
            // Fermer le chapitre
            chapitre.classList.remove('active');
            contenu.style.display = 'none';
        }
    });

    // Mettre à jour le texte du bouton en fonction de l'état des chapitres
    toggleButton.textContent = chapitresOuverts ? 'Tout réduire' : 'Tout développer';
}




//////////////////////////////////////////////////////////////////////////////
// Authentification - Ouvrir/Fermer  ///////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
let container_authentification = document.querySelector('.container_authentification');
/* 
* Permet d'ouvrir la div d'authentification lorsqu'on clique sur l'icone de bonhomme 
*/
function ouvrir_authentification() {
    if (container_authentification.classList.contains('container_fermer')) {
        container_authentification.classList.remove('container_fermer');
        container_authentification.classList.add('container_ouvrir');
    }
}

/* 
* Permet de fermer la div d'authentification lorsqu'on clique sur le x dans le coin de la div 
*/
function fermer_authentification() {
    if (container_authentification.classList.contains('container_ouvrir')) {
        container_authentification.classList.remove('container_ouvrir');
        container_authentification.classList.add('container_fermer');
    }
}






