<?php
namespace App\Repository;

require_once __DIR__ . '/../../Database/Database.php';
use App\Database\Database;
use App\Model\Location;
use PDO;
 class LocationRepository {
    private PDO $pdo;
     public function __construct()
     {
        $this->pdo  = Database::getInstance()->getConnexion();
       } 
   //   public function create(location $location):bool
   //   {
   //     $stmt = $this->pdo->prepare("INSERT INTO location (client_id,voiture_id,dure)values(?,?,?)");
   //      return $stmt->execute([$location->getIdClient(),$location->getIdVoiture(),$location->getDuree()]);
   //   }

     public function listeLocation():array|false
     {
        $sql = " SELECT location* client.nom,voiture.marque 
        from location join client on client.id = location.client_id join voiture on voiture.id=location_voiture_id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchall(PDO::FETCH_ASSOC);
     }
    public function enLocation(int $idVoiture) :array|false {
       $sql = "SELECT * FROM location where id_voiture = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$idVoiture]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

 }