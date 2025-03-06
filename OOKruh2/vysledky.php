<?php
$vysledek = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $polomer = isset($_POST['polomer']) ? floatval($_POST['polomer']) : 0;
    if ($polomer > 0) {
        if (isset($_POST['obsah'])) {
            $obsah = pi() * $polomer * $polomer;
            $vysledek = "<p>Obsah kruhu: " . round($obsah, 2) . "</p>";
        } elseif (isset($_POST['obvod'])) {
            $obvod = 2 * pi() * $polomer;
            $vysledek = "<p>Obvod kruhu: " . round($obvod, 2) . "</p>";
        }
    } else {
        $vysledek = "<p style='color: red;'>Zadejte platný poloměr!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Výsledek</h2>
    <?php echo $vysledek; ?>
    <a href="index.php">Zadej další píklad</a>

</body>

</html>