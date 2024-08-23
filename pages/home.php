<?php
use App\app\Database;
require('../vendor/autoload.php');
$db = new Database('testdb');
?>
<div class="container">
    <h1> je suis sur home page </h1>
    <h2> la liste des articles</h2>
    <ul>
        <?php foreach ($db->query('SELECT * FROM post', 'App\app\table\Articles') as $post): ?>
            <h2> <a href="<?php $post->getURL() ?>">
                    <?= $post->titre ?>
                </a></h2>
            <p>
                <?= $post->getExtrait() ?>
            </p>
        <?php endforeach ?>
    </ul>
</div>