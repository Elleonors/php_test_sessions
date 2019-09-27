<?php
$module = "index.php";
include './list.php';
include "$pdo";
include "$header";
?>
<div class="jumbotron bg-warning text-center">
    <h1>Hello!</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 border border-dark">
            <div class="row">
                <div class="offset-md-3 col-md-6 border border-warning">
                    <p class="text-center border border-info">
                        <?php foreach($articles as $article): ?>
                        <h2><?= $article->titre_articles?></h2>
                        <time><?= $article->date_articles ?></time>
                        <?php endforeach; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "$footer";
?>