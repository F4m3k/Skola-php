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
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpočet obvodu a obsahu kruhu</title>
</head>
<body>
    <h1>Výpočet obsahu a obvodu kruhu</h1>
    <form method="post">
        <label for="polomwe">Zadejte poloměr:</label>
        <input type="number" step="0.01" name="polomer" id="polomer" required>
        <br><br>
        <button type="submit" name="obvod">Spočítat obvod</button>
        <p>Obvod kruhu se vypočítá podle vzorce o=2*π*r</p>
        <button type="submit" name="obsah">Spočítat obsah</button>
        <p>Obsah kruhu se vypočítá podle vzorce S=π*r<sup>2</sup></p>
        
    </form>
    <h2>Výsledek</h2>
    <?php echo $vysledek; ?>
</body>
</html>
