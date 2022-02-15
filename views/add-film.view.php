<?php require "partials/head.php" ?>
<form method="POST" action="add-new">
    <input type="text" name="titolo" placeholder="Titolo" required>
    <input type="number" name="valutazione" min="1" max="5" required>
    <button type="submit">Submit</button>
</form>
<?php require "partials/footer.php"; ?>