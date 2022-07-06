<?php

<<<<<<< HEAD
namespace Oframework\Utils;
=======
namespace App\Utils;
>>>>>>> 5c9e94883466d9a0755da067b2f2576e8dd0ae33

use PDO;

// Retenir son utilisation  => Database::getPDO()
// Design Pattern : Singleton
<<<<<<< HEAD
class Database {
    /** @var PDO */
    private $dbh;
    private static $_instance;
    private function __construct() {
        // Récupération des données du fichier de config
        // la fonction parse_ini_file parse le fichier et retourne un array associatif
        $configData = parse_ini_file(__DIR__.'/../config.conf');
        
=======
class Database
{
    /**
     * Objet PDO représentant la connexion à la base de données
     *
     * @var PDO
     */
    private $dbh;
    /**
     * Propriété statique (liée à la classe) stockant l'unique instance objet
     *
     * @var Database
     */
    private static $instance;

    /**
     * Constructeur
     *
     * en visibilité private
     * => seul le code de la classe a le droit de créer une instance de cette classe
     */
    private function __construct()
    {
        // Récupération des données du fichier de config
        // la fonction parse_ini_file parse le fichier et retourne un array associatif
        $configData = parse_ini_file(__DIR__ . '/../config.ini');

        // PHP essaie d'exécuter tout le code à l'intérieur du bloc "try", mais...
>>>>>>> 5c9e94883466d9a0755da067b2f2576e8dd0ae33
        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
<<<<<<< HEAD
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
=======
        // ... mais si une erreur (Exception) survient, alors on attrape l'exception
        // et on exécute le code que l'on souhaite (ici, on affiche un message d'erreur)
        } catch (\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage() . '<br>';
>>>>>>> 5c9e94883466d9a0755da067b2f2576e8dd0ae33
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }
<<<<<<< HEAD
    // the unique method you need to use
    public static function getPDO() {
        // If no instance => create one
        if (empty(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance->dbh;
    }
}
=======

    /**
     * Méthode permettant de retourner, dans tous les cas,
     * la propriété dbh (objet PDO) de l'unique instance de Database
     *
     * @return PDO
     */
    public static function getPDO()
    {
        // Si on n'a pas encore créé la seule instance de la classe
        if (empty(self::$instance)) {
            // Alors, on crée cette instance et on la stocke dans la propriété statique $instance
            self::$instance = new Database();
        }
        // Sinon, on ne fait rien l'instance a déjà été créée

        // Enfin, on retourne la propriété dbh de l'instance unique de Database
        return self::$instance->dbh;
    }
}
>>>>>>> 5c9e94883466d9a0755da067b2f2576e8dd0ae33
