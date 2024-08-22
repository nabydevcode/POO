<?php
namespace App\app;
class Personnage
{
    public $nom;
    public $prenoms;

    public function __construct($nom, $prenoms)
    {
        $this->nom = $nom;
        $this->prenoms = $prenoms;
    }
}