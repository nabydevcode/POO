<?php

namespace App\app\table;

use App\app\table\General;

class Articles extends General
{
    public int $id;
    public string $titre;
    public string $message;
    public $categorie;
    public $category_id;


    public function getURL()
    {
        return 'index.php?p=article&id=' . $this->id;
    }
    public function getExtrait()
    {
        $html = '<p>' . substr($this->message, 0, 100) . '<p>';
        $html .= '<p> . <a href="' . $this->getURL() . '"> Voir la suite ...</a><p>';
        return $html;
    }

}