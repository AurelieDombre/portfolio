<?php

namespace App\Controllers;

use Oframework\Controllers\CoreController;

class ErrorController extends CoreController {
    /**
     * Page 404
     */
    public function error404() {
        // On indique au navigateur que la page n'est pas trouvée
        // Ce n'est pas une redirection
        header("HTTP/1.0 404 Not Found");

        // Puis on affiche du code HTML
        $this->show('404');
    }

    /**
     * Page 404
     */
    public function error403() {
        // On indique au navigateur que la page n'est pas trouvée
        // Ce n'est pas une redirection
        header("HTTP/1.0 403 Forbidden");

        // Puis on affiche du code HTML
        $this->show('403');
    }
}