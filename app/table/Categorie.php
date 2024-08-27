<?php
namespace App\app\Table;
use App\app\Table\Articles;

class Categorie extends General
{
    public int $id;
    public string $name;
    public static $table = 'categories';

    public function getUrl()
    {
        return 'index.php?p=categorie&id=' . $this->id;
    }

}







