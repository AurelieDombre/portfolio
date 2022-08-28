<?php

namespace App\Controllers;

use Oframework\Controllers\CoreController;
use App\Utils\Flash;

class ContactController extends CoreController
{
    /**
     * Method for the contact page
     * 
     * Method GET
     */
    public function contact()
    {
        // If I need data from database (Models)
        // For now, this page only needs the view
        $this->show('main/contactForm');
        // Instead, if this page needs data, we can put all data
        // in an array as 2nd argument :
        // $this->show('main/home', [
        //     'examples' => $examples
        // ]);
    }

    /**
     * Method for contact of the home page
     * 
     * Method POST
     */
    public function postContact()
    {
        // dd('avant if');

        // Vérification des données
        $lastname = filter_input(INPUT_POST, 'lastname');
        $firstname = filter_input(INPUT_POST, 'firstname');
        $email = filter_input(INPUT_POST, 'email');
        $messageContact = filter_input(INPUT_POST, 'messageContact');

        // Gestion des erreurs
        $errorsList = [];

        if ($lastname === null || $lastname === '') {
            // Ajout d'un message d'erreur
            $errorsList[] = 'Le nom doit être renseigné';
        }

        if ($firstname === null || $firstname === '') {
            // Ajout d'un message d'erreur
            $errorsList[] = 'Le prénom doit être renseigné';
        }

        if ($email === false) {
            $errorsList[] = 'L\'email n\'a pas un format valide';
        }

        if ($messageContact === false) {
            $errorsList[] = 'Un messag doit être renseigné';
        }

        // Vérifier si le formulaire est soumis 
        if (isset($_POST['submit']) === false) {
            /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
            dd('dans le if');


            // afficher le résultat
            $mailSend ='<h1>Message envoyé depuis la page Contact du portfolio</h1>
            <p><b>Nom : </b>' . $_POST['lastname']. '<br>
            <p><b>Prénom : </b>' . $_POST['firstname'] . '<br>
            <p><b>Email : </b>' . $_POST['email'] . '<br>
            <b>Message : </b>' . $_POST['messageContact'] . '</p>';
            
            dd($mailSend );
            dd($_POST['messageContact']);

            $retour = mail('au.dombre@gmail.com', 'Envoi depuis page Contact', $mailSend,"From:contact@exemplesite.fr\r\nReply-to:" . $_POST['email']);
            dd($retour);

            if($retour){
                echo ('Votre message a bien été envoyé');

            }
        }

        // For now, this page only needs the view
        //$this->show('main/home');
        // Instead, if this page needs data, we can put all data
        // in an array as 2nd argument :
        // $this->show('main/home', [
        //     'examples' => $examples
        // ]);
    }

    /**
     * Method for the validate page
     */
    public function validate()
    {
        // If I need data from database (Models)

        // For now, this page only needs the view
        $this->show('main/validate');
        // Instead, if this page needs data, we can put all data
        // in an array as 2nd argument :
        // $this->show('main/home', [
        //     'examples' => $examples
        // ]);
    }
}
