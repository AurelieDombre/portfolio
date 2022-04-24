<?php

class MainController 
{

    // méthode show
    protected function show($viewName, $viewData = [])
    {
        //j'appelle la variable $router déclarée dans index.php à devenir globale,
        // c'est à dire, que sa portée devient globale
        // au lieu d'être disponible que dans index.php
        global $router;

        // on définit cette variable pour que nos vues puissent mettre le lien de la page courante en avant
        // Toutes nos données dynamiques à utiliser dans les vues se trouveront dans $viewData (par souci de simplification)
        $viewData['currentPage'] = $viewName;


               // __DIR__ vaut /var/www/html/S05/..../Controllers
        require __DIR__ . '/app/views/header.tpl.php';
        // on inclut une vue selon la valeur du paramètre $viewName
        require __DIR__ . '/app/views/' . $viewName . '.tpl.php';
        require __DIR__ . '/app/views/header.tpl.php';
    }


    // action home
    public function home($params = [])
    {
        // récupérer les données (liste des catégories)

        // Todo : Passer les catégories à la vue
        $this->show('home');
    }

    // public function legalMentions($params = [])
    // {
    //     $this->show('legal-mentions');
    // }

   
}