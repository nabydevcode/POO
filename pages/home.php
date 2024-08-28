<?php

use App\app\Table\App;
use App\app\Table\Articles;
use App\app\Table\Categorie;
require('../vendor/autoload.php');
$db = App::getDB();
$ar = new Articles();
?>
<div class="container">
    <h1> Je suis sur la home page </h1>
    <h2> La liste des articles</h2>
    <div class="row">
        <!-- Colonne des articles -->
        <div class="col-sm-8">
            <ul>
                <?php foreach ($ar->articleByCategorie() as $post): ?>
                    <li>
                        <h2><a href="<?= $post->getUrl() ?>">
                                <?= $post->titre ?>
                            </a></h2>
                        <p>
                            <?= $post->categorie ?>
                        </p>
                        <p>
                            <?= $post->getExtrait() ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Colonne des catégories -->
        <div class="col-4">
            <ul>
                <?php foreach (Categorie::allOrbyid() as $categorie): ?>
                    <li>
                        <a href="<?= $categorie->getUrl() ?>">
                            <?= $categorie->name ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>