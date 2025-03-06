<?php


if(isset($_POST["submit"])){
    $email = $_POST["mail"];
    $news = $_POST["news"];
    $mesto = $_POST["mestop"];
    $pohlavi = $_POST["radio"];
    $i++;
    $message = $_POST["messageeeeeeeeeee"];
    $file = fopen("results.php","a");
    fwrite($file, " 
    <div class='message'>
    $user $email $pohlavi:<br>
    $message <br>
    </div>
    ");

    header("Location: formular.php");

}