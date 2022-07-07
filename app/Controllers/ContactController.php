<?php

namespace App\Controllers;

use Oframework\Controllers\CoreController;

class ContactController extends CoreController
{
    /**
     * Method for the contact page
     * 
     * Method GET
     */
    public function contact() {
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
     * Method for the home page
     * 
     * Method POST
     */
    public function postContact() {
        // If I need data from database (Models)

        // For now, this page only needs the view
        $this->show('main/contact');
        // Instead, if this page needs data, we can put all data
        // in an array as 2nd argument :
        // $this->show('main/home', [
        //     'examples' => $examples
        // ]);
    }

        /**
     * Method for the validate page
     */
    public function validate() {
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
