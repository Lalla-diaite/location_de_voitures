<?php
namespace App\Repository;
use PDO;
use App\Database\Database;
class VoitureRepository{
    private  $pdo;

    public function __construct()
    {
         $this->pdo  = Database::getInstance()->getConnexion();
    }
   
    public function trouverId(int $id):array|false
    {
        $sql = ("SELECT * FROM voiture where id_voiture = ?");
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function listeVoiture():array|false
    {
        $sql = "SELECT * FROM voiture";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }
      public function findBydesignation($designation):array
     {
        $sql = "SELECT * FROM voiture where designation LIKE :designation";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['designation' => '%' . $designation . '%']);
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
     }
     
}