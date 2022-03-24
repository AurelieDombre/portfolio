
// Appeler la classe des images


let img_slider = document.querySelector(".slide__image");
console.log(img_slider);

// Quelle image afficher en premier = 0 car index 0
let etape = 0;

// nombre d'image = nbr d'image qu'il y a dans le tableau

let nbr_img = img_slider.length;

// Appel de classe pour le bouton précédent et suivant
let precedent = document.querySelector(".precedent");

let suivant = document.querySelector(".suivant")


// Fonction pour enlevé la classe active qui permettra de faire le slide = la clase active va passer d'une image à l'autre et afficher l'image sur laquelle la classe est placée.
function enleverActiveImages() {

    for (let index= 0; index < nbr_img; index++){

        img_slider[index].classList.remove("active");

    }

}
// Ajout d'un écouteur
suivant.addEventListener('click', handleSlideRigth);

// fonction de l'éxécusion de l'écouteur

function handleSlideRigth(event){
    etape++;

    // si etape est inférieur ou égale au nombre d'image (arrivé à la fin du tableau d'image) alors allez à l'index 0.
    if(etape >= nbr_img){
        etape = 0;
    }
    enleverActiveImages();
    img_slider[etape].classList.add("active");
}

precedent.addEventListener('click', handleSlideLeft);

function handleSlideLeft(event){
    etape--;

    // si etape est inférieur à 0 alors allez à l'index "fin du slider".
    if(etape < 0){
        etape = 0;
    }
    enleverActiveImages();
    img_slider[etape].classList.add("active");
}


// Rendre auto les slides, toutes les 3secondes elles changes

setInterval(function(){
    etape++;

    if(etape >= nbr_img){
        etape = 0;
    }
    enleverActiveImages();
    img_slider[etape].classList.add("active");
}, 3000)




