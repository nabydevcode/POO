<?php
use App\app\table\Articles;
use App\app\Table\Categorie;

$cate = Categorie::allOrbyid($_GET['id']);
$articles = Articles::articleBycategori($_GET['id']);
?>
<h1>
    <?= $cate->name ?>
</h1>
<div class="container">
    <div class="row">
        <div class="col-8">
            <?php foreach ($articles as $value): ?>
                <div class="container">
                    <?php if ($value): ?>
                        <h1>
                            <?= $value->titre ?>
                        </h1>
                        <em>
                            <?= $value->categorie ?>
                        </em>
                        <p>
                            <?= $value->message; ?>
                        </p>
                    <?php else: ?>
                        <h1> jdflqjfl</h1>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
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