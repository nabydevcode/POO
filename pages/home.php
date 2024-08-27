<?php

use App\app\Table\App;
use App\app\Table\Articles;
use App\app\Table\Categorie;
require('../vendor/autoload.php');
$db = App::getDB();
$ar = new Articles();
?>
<div class="container">
    <h1> je suis sur home page </h1>
    <h2> la liste des articles</h2>
    <ul>
        <?php foreach ($ar->articleByCategorie() as $post): ?>
            <div class="row ">
                <div class="col-sm-8">
                    <h2> <a href="<?= $post->getUrl() ?>">
                            <?= $post->titre ?>
                        </a></h2>
                    <p>
                        <?= ($post->categorie) ?>
                    </p>
                    <p>
                        <?= $post->getExtrait() ?>
                    </p>
                <?php endforeach ?>
                <div class="col-sm-4">
                    <?php foreach (Categorie::allOrbyid() as $categorie): ?>
                        <ul>
                            <li>
                                <a href="<?= $categorie->getUrl() ?>">
                                    <?= $categorie->name ?>
                                </a>
                            </li>
                        </ul>
                    <?php endforeach ?>
                </div>
            </div>

    </ul>
</div>