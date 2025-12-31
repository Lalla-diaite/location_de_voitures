<?php 
namespace App\Controllers;

use App\Database\Database;
use App\Model\Location;
use App\Repository\LocationRepository;
use App\Repository\VoitureRepository;
use App\Repository\ClientRepository;
use App\Model\Client;

class LocationController {
    private LocationRepository $locationRepository;
  
   

    
    public function __construct()   
    {
      $this->locationRepository = new LocationRepository();
    }
   
    public function index(){
        $id = $_GET['id'] ?? null;
        $location = $this->locationRepository->enLocation($id);
          if(!empty($location)) {
            $message [] = "la voiture est deja en location";
            require_once __DIR__ ."/../../views/home/index.php";
              return;
    }
        require_once __DIR__ ."/../../views/home/location.php";
    }
    public function verification()
    {
            $designation = $_POST['designation'];
        if(empty($designation)) {
            $message[] = "Veuillez saisir une designation";
            require_once __DIR__ ."/../../views/home/index.php";
            return;
        }
      // if(!empty($this->locationRepository->enLocation($designation))) {
       // $message [] = "la voiture est deja en location";
        // require_once __DIR__ ."/../../views/home/index.php";
          //  return;
      // } else

        $voitureRepository = new VoitureRepository();
        $voiture []= $voitureRepository->findBydesignation($designation);
        if(!empty($voiture)){
            require_once __DIR__ ."/../../views/home/index.php";
            return;
        } else {
            $message[] = "la voiture n'existe pas";
            require_once __DIR__ ."/../../views/home/index.php";
            return;
         }
    }
    //Affichage du formulaire pour louer
    //public function creation(){
     //   require_once __DIR__ ."/../../views/home/location.php";
   // }

    //enrigistrement du location
    public function enrigistrer() {
        
       
            $clienRepo = new ClientRepository();
        $nom =htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $tel = htmlspecialchars($_POST['telephone']);
        $cni = htmlspecialchars($_POST['CNI']);
        if(empty($nom) || empty($prenom) || empty($tel) || empty($cni)) {
            $message[] = "Veuillez remplir tous les champs";
            require_once __DIR__ ."/../../views/home/location.php";
            return;
        }
        $client = new Client($nom,$prenom,$tel,$cni);
        $clienRepo->create($client);
         $message[] = "Location enregistrée avec succès.";
          require_once __DIR__ ."/../../views/home/location.php";
          
            // $IdVoiture = $_GET['id'] ?? null;
            // $duree = $_POST['choix'];

            // $location = new Location($duree,9);
            // $this->locationRepository->create($location);
            // $message = $message."Location enregistrée avec succès.";
            // require_once __DIR__ ."/../../views/home/location.php";
        }

      
    }


   
