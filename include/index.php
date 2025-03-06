<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>

<body>
    <h1>Hlavní stránka</h1>
    <p>Esse esse est incididunt do quis officia adipisicing nulla cillum commodo officia non velit pariatur. Proident id quis laborum velit aute veniam duis. Velit Lorem dolore laborum veniam qui aliqua adipisicing. Et adipisicing esse enim anim tempor nostrud enim consequat. Qui deserunt amet in voluptate veniam veniam.</p>

    <?php
    include "adresa.html";

    if (date("a")=="pm"){
        return;
    }
    echo "Těšíš se na oběd";
    ?>

</body>

</html>