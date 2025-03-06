<?php 
echo"Ahoj.<br>";
echo "Dnes je ".date("Y-m-d H:i:s");
echo "<br>";
if(date("a")=="am") {echo "Je dopoledne.";} else {echo "Je odpoledne.";}
echo "<br>";
if(date("G")>8 && date("G")<12 ) {echo "Je výuka.";} else {echo "Není výuka.";}
?>
