<?php
use App\app\table\Articles;
use App\app\Table\Categorie;

$cate = Categorie::all($_GET['id']);
$articles = Articles::articleBycategori($_GET['id']);

?>


<h1>
    <?= $cate->name ?>
</h1>


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