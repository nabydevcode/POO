<?php

use App\app\Table\App;
use App\app\Table\Articles;
use App\app\Table\Categorie;
require('../vendor/autoload.php');
$db = App::getDB();
?>
<div class="container">
    <h1> je suis sur home page </h1>
    <h2> la liste des articles</h2>
    <ul>
        <?php foreach (Articles::getLastarticle() as $post): ?>

            <div class="row">
                <div class="col-sm-8">

                    <h2> <a href="<?php $post->getURL() ?>">
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
                    <?php foreach (Categorie::all() as $categorie): ?>
                        <ul>
                            <li>
                                <a href="<?= $categorie->getURL() ?>">
                                    <?= $categorie->name ?>
                                </a>
                            </li>
                        </ul>

                    <?php endforeach ?>
                </div>
            </div>

    </ul>
</div>