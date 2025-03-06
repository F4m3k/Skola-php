<title>Formuláře
</title>

<?php include "process.php"?>
<body> 
<div class="box">
    <h1>Diskuzní forum</h1>
        <form method="post" action="process.php" requied>
            <input type="text" name="mail" placeholder="Zadejte svoje jméno" required><br><br>

            <textarea name="messageeeeeeeeeee" cols="30" rows="10" placeholder="Text příspěvku..."></textarea>
            <input type="submit" name="submit" value="Odeslat příspěvek">
    </form>
    <br><br>
    <h1>
        Odpovědi
    </h1>

    <?php include "results.php";?>
</div>
</body>
<link rel="stylesheet" href="style.css">
</html>