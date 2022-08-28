<?php

namespace App\Controllers;

use GMP;
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
        //dump('avant if', $_POST);
        // Vérification des données
        $lastname = filter_input(INPUT_POST, 'lastname');
        $firstname = filter_input(INPUT_POST, 'firstname');
        $email = filter_input(INPUT_POST, 'email');
        $messageContact = filter_input(INPUT_POST,'messageContact');


        // Gestion des erreurs
        $errorsList = [];

        $successMessage =[];

        if (empty($_POST['lastname'])) {
            // Ajout d'un message d'erreur
            $errorsList['lastname'] = 'Le nom doit être renseigné';
        }
        

        if (empty($_POST['firstname'])) {
            // Ajout d'un message d'erreur
            $errorsList['firstname'] = 'Le prénom doit être renseigné';
        }

        if (empty($_POST['email'])) {
            $errorsList['mail'] = 'L\'email doit être renseigné';
        }
        
        if (empty($_POST['messageContact'])) {
            $errorsList['messageContact'] = 'Un message doit être renseigné';
        }

        //var_dump( $errorsList);


        // Vérifier si le formulaire est soumis 
        if (isset($_POST['submit'])) {
            
        /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
            //dump('avant mail send', $_POST);
            // afficher le résultat
            $mailSend ='<h1>Message envoyé depuis la page Contact du portfolio</h1>
            <p><b>Nom : </b>' . $_POST['lastname']. '<br>
            <p><b>Prénom : </b>' . $_POST['firstname'] . '<br>
            <p><b>Email : </b>' . $_POST['email'] . '<br>
            <b>Message : </b>' . $_POST['messageContact'] . '</p>';
            
            //dump('après mail send', $mailSend);

            $retour = mail('au.dombre@gmail.com', 'Envoi depuis page Contact', $mailSend,"From:contact@exemplesite.fr\r\nReply-to:" . $_POST['email']);
            //dump("retour",$retour);

            if($retour){
                $successMessage['mailSend'] = 'Votre message a bien été envoyé';
                header('Location: /portfolio/public/');
            }

        } 

        if (!empty($errorsList)){
            session_start();
            $_SESSION['errorsList'] = $errorsList;
            header('Location: /portfolio/public/');
        }
        
        //return $this->redirectToRoute('main-home');

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
