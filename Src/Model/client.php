<?php
//POO
namespace App\Model;
class Client {
    //attributs
    private ?int $id = null;
    private string $nom;
    private string $prenom;
    private int $tel;
    private int $cni;

    //methodes
    public function __construct(string $nom,string $prenom,int $tel,int $cni)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->cni = $cni;
        $this->tel = $tel;
    }
    //getters
    public function getId(): ?int {
        return $this->id;
        
    }
    public function getNom(): string {
        return $this->nom;
    }
    public function getPrenom(): string {
        return $this->prenom;
    }
    public function getTel(): int {
        return $this->tel;
    }
    public function getCni(): int {
        return $this->cni;
    }


}
?>