<?php
namespace App\Model;
class Location{
    private ?int $id_location = null;
    private string $duree;
    private ?int $id_client;
    private int $id_voiture;

    public function __construct(string $duree,int $id_voiture)
    {
        $this->duree = $duree;
        $this->id_voiture = $id_voiture;
    }
    public function getIdLocation(): ?int {
        return $this->id_location;
    }
    public function getDuree(): string {
        return $this->duree;
    }
  
    public function getIdVoiture(): int {
        return $this->id_voiture;
    }
}