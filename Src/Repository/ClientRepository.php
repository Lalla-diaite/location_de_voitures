<?php
namespace App\Repository;

require_once __DIR__ . '/../../Database/Database.php';
use App\Model\Client;
use App\Database\Database;
use PDO;
class ClientRepository
{
    private PDO $db;
     public function __construct()
     {
        $this->db = Database::getInstance()->getConnexion();
     }
     public function create( Client $user):bool{

        $sql = "INSERT INTO clients(nom,prenom,cni,tel) VALUES(?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$user->getNom(),$user->getPrenom(),$user->getCni(),$user->getTel()]);
     }

     public function verification(string $cni): Client|false {
        $sql = "SELECT * FROM clients WHERE cni = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$cni]);
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resultat) {
            return new Client($resultat['nom'], $resultat['prenom'], $resultat['cni'], $resultat['tel']);
        }
        return false;
     }
}