<?php
namespace App\app\Table;

class Categorie extends General
{
    public int $id;
    public string $name;
    public static $table = 'categories';


    public function getUrl(): string
    {
        return "index.php?p=categorie&id=" . $this->id;
    }

}







