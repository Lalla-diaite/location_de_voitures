<?php
namespace App\Model;
class Voiture{
    private ?int $id_voiture = null;
    private string $marque;
    private string $designation;
    private string $numero_chassis;
    private int $kilometrage;
    public function __construct(string $marque,string $designation,string $numero_chassis,int $kilometrage)
    {
        $this->marque = $marque;
        $this->designation = $designation;
        $this->numero_chassis = $numero_chassis;
        $this->kilometrage = $kilometrage;
    }
    public function getIdVoiture(): ?int {
        return $this->id_voiture;
    }
    public function getMarque(): string {
        return $this->marque;
    }
    public function getDesignation(): string {
        return $this->designation;
    }
    public function getNumeroChassis(): string {
        return $this->numero_chassis;
    }
    public function getKilometrage(): int {
        return $this->kilometrage;
    }
    
}