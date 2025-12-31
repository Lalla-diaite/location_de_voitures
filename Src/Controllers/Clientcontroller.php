<?php
namespace App\Controllers;
use App\Repository\ClientRepository;
use App\Model\Client;
class ClientController{

    private  ClientRepository $clientRepositorty;

    public function __construct()
    {
        $this->clientRepositorty = new ClientRepository( );
    }
    public function creation()
    {
        
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $tel = htmlspecialchars($_POST['telephone']);
        $cni = htmlspecialchars($_POST['CNI']);
        if(empty($nom) || empty($prenom) || empty($tel) || empty($cni)) {
            $message[] = "Veuillez remplir tous les champs";
            require_once __DIR__ ."/../../views/home/location.php";
            return;
        }
        $client = new Client($nom,$prenom,$tel,$cni);
        $this->clientRepositorty->create($client);
        $message[] = "Client enregistré avec succès.";
        require_once __DIR__ ."/../../views/home/location.php";
        
       
    }

    public function verification(){
      $cni = $_POST['CNI'] ?? null;
      if(empty($cni)) {
        $message[] = "Veuillez saisir un numéro de CNI";
        require_once __DIR__ ."/../../views/home/location.php";
        return;
      }

      $resultat = $this->clientRepositorty->verification($cni);
      if(!empty($resultat))
      {
        $message[] = "Client trouvé : ".$resultat->getNom()." ".$resultat->getPrenom();
        require_once __DIR__ ."/../../views/home/location.php";
        return;

      } if($resultat === false) {
        $message[] = "Client non trouvé.  Nouveau client.";
        require_once __DIR__ ."/../../views/home/location.php";
        return;
      }
        
    }


}