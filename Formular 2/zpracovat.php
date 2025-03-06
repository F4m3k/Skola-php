<?php
 $email = $_POST['email'];
 $radiobutton1 = $_POST['radio1'];
 
 if (isset($_POST['news'])) $news = $_POST['news'];
 else $news = '0'  ;
 $select1 = $_POST['select1'];
 $textarea1 = $_POST['textarea1'];

 echo "E-mail: " . $email . '<br>';
 if ($radiobutton1 == 'm') echo 'Muž'; else echo 'Žena';
 if ($news == '1') echo '<br>Odesílat novinky'; else echo '<br>Neodesílat novinky';
 switch ($select1) {
     case '1': echo '<br>Boskovice'; break;
     case '2': echo '<br>Letovice'; break;
     case '3': echo '<br>Prčice'; break;
     default: echo '<br>Jiné'; break;
 }
 echo '<br>Textarea: ' . $textarea1;

 // Zápis do souboru
 $file = fopen('formular.txt', 'a');
 fwrite($file, "E-mail: " . $email . "\n");
 fwrite($file, "Pohlaví: ". ($radiobutton1 =='m'? 'Muž' : 'Žena'). "\n");
 fwrite($file, "Novinky: ". ($news == '1'? '1' : '0'). "\n");
 fwrite($file, "Město: ". ($select1 == '1'? 'Boskovice' : ($select1 == '2'? 'Letovice' : ($select1 == '3'? 'Prčice' : 'jiné'))). "\n");
 fwrite($file, "Textarea: ". $textarea1. "\n\n");
 fclose($file);

?>