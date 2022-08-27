

const formDisplay = {
    
    //  on déclare une propriété (une variable dans un module) pour qu'elle soit accessible depuis toutes les méthodes du module
    formElmt: document.querySelector(".formulaire"),
    
    init: function () {
        // la méthode init permet de poser tous les espion: l'initialisation du module

        // Etape 1 on selectionne le lien du contact dans le menu 
        const menuContactElmt = document.querySelector(".menu--contact");
        
        // on pose un ecouteur d'evenement dessus pour espionner le click
        menuContactElmt.addEventListener("click", formDisplay.handleformDisplayClick);

        // on recupere le bouton close 
        const closeBtnElmt = document.querySelector(".form__close");

        // on pose un ecouteur d'evenement dessus pour espionner le click
        closeBtnElmt.addEventListener("click", formDisplay.handleformDisplayClick);

        // Intercepter l'envoi du formulaire
        // recuperer l'element formulaire sur la page avec sa classe
        const allFormElmt = document.querySelector(".all__form__contact");

        // on place un espion sur l'evenement 'submit' du formulaire
        allFormElmt.addEventListener("submit", formDisplay.handleFormSubmit);

        // on place un ecouteur sur l'event 'scroll' de la fenetre 'window'
        //  event scroll : https://developer.mozilla.org/fr/docs/Web/API/Document/scroll_event
        window.addEventListener("scroll", formDisplay.handleScroll);

        // on veut lancer un timer au chargment du site pour afficher le formulaire au bout de 5 secondes !
        // premier argument : le handler
        // deuxième argument : le nombre de millisecondes à attendre avant d'executer le handler
        setTimeout(formDisplay.display, 6000);
    },
    handleScroll: function () {
        // si window.scrollY dépasse 1000 on affiche le formulaire
        if (window.scrollY > 250) {
            // on affiche le formulaire !!!
            formDisplay.display();

            // on renvoie l'espion chez lui, on veut supprimer le eventListener !!!!
            // doc : https://developer.mozilla.org/fr/docs/Web/API/EventTarget/removeEventListener
            window.removeEventListener("scroll", formDisplay.handleScroll);
        }
    },
    handleformDisplayClick: function (event) {
        // on stoppe le comportement par défaut du lien pour ne pas qu'il y ai de redirection
        event.preventDefault();
        console.log('test bouton');
        // on ajoute la classe form--on sur le aside pour l'afficher !
        formDisplay.formElmt.classList.toggle("form--on");
    },
    handleFormSubmit: function (event) {
        const forbiddenDomains = [
            "@yopmail.com",
            "@yopmail.fr",
            "@yopmail.net",
            "@cool.fr.nf",
            "@jetable.fr.nf",
            "@courriel.fr.nf",
            "@moncourrier.fr.nf",
            "@monemail.fr.nf",
            "@monmail.fr.nf",
            "@hide.biz.st",
            "@mymail.infos.st",
        ];

        // on sélectionne le champ dans lequel l'email est inscrit (il possède la classe form_email).
        const formFieldElmt = document.querySelector(".form_email");
        const formFieldValue = formFieldElmt.value;

        // verifier si la valeur est incluse dans une des lignes du tableau des emails jetables
        //  on boucle sur tous les elements du tableau
        for (let forbiddenDomain of forbiddenDomains) {
            //  on compare la ligne forbiddenDomain avec la value de l'utilisateur formFieldValue
            const isForbidden = formFieldValue.includes(forbiddenDomain);
            // si isForbidden est egal à true : l'email fait parti des jetables donc on a pas besoin de continuer plus loin, on sort de la boucle
            //  si isForbidden est true l'email fait parti des jetables et on affiche un message d'erreur.

            if (isForbidden) {
                //  on stoppe le comportement par defaut du submit de form avec preventDefault
                event.preventDefault();
                // on veux afficher un message, on va utiliser le module d'affichage des messages
                // la méthode addMessageToElmt prend en paramètre le node parent et le texte à afficher
                messages.addMessageToElmt(formDisplay.formElmt, "Merci de ne pas utiliser des adresses e-mails jetables");

                break;
            }
        }
    },
    display: function () {
        // on ajoute la classe form--on sur le aside pour l\'afficher !
        formDisplay.formElmt.classList.add("form--on");
    },
};

document.addEventListener("DOMContentLoaded", formDisplay.init());
