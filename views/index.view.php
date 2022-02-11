<?php require "partials/head.php" ?>

<?php foreach ($films as $film) : ?>
    <li>
        <label>Title: </label><?= $film->titolo?>
        <label>Valuazione: </label><?= $film->valutazione?>
    </li>
<?php endforeach ?>

<?php require "partials/footer.php"; ?>