<?php
namespace App\Database;
use PDO;
use PDOException;
    class Database{
        private static ?Database $instance = null;
        private PDO $pdo;

        private function __construct()
        {
            try{
                $this->pdo = new PDO ("mysql:host=localhost;dbname=sama_car_db","root","",
                 [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
            );    
            } catch (PDOException $e)
            {
              die("ERREUR DE CONNEXION".$e->getMessage());
            }
        }
    //on vas recupere  l'unique instance 
   public static function getInstance():Database{
          if(self::$instance === null)
          {
            self::$instance = new Database;
          }
          return self::$instance;
   }
   //recuperation de la cnnx
   public function getConnexion():PDO{
    return $this->pdo;
   }

    } 
    
   