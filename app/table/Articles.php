<?php

namespace App\app\Table;

class Articles
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