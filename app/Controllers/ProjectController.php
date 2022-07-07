<?php

namespace App\Controllers;

use Oframework\Controllers\CoreController;

class ProjectController extends CoreController
{
        /**
     * Method for the home page
     */
    public function project($id) {
        // If I need data from database (Models)

        // For now, this page only needs the view
        $this->show('main/project');
        // Instead, if this page needs data, we can put all data
        // in an array as 2nd argument :
        // $this->show('main/home', [
        //     'examples' => $examples
        // ]);
    }
}
