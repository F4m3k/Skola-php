<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpočet obvodu a obsahu kruhu</title>
</head>

<body>
    <h1>Výpočet obsahu a obvodu kruhu</h1>
    <form method="post" action="vysledky.php">
        <label for="polomwe">Zadejte poloměr:</label>
        <input type="number" step="0.01" name="polomer" id="polomer" required>
        <br><br>
        <button type="submit" name="obvod">Spočítat obvod</button>
        <p>Obvod kruhu se vypočítá podle vzorce o=2*π*r</p>
        <button type="submit" name="obsah">Spočítat obsah</button>
        <p>Obsah kruhu se vypočítá podle vzorce S=π*r<sup>2</sup></p>

    </form>
</body>

</html>