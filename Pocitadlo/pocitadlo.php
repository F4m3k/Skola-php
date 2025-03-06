<?php
    $handle = fopen("pocet.bin", "a");
    fclose($handle);
    $handle = fopen("pocet.bin", "r+");
    $kolik = fread($handle,10);
    $kolik++;
    rewind($handle);
    fwrite($handle, $kolik);
    fclose($handle);
    echo "Počet odeslaných dotazů: ", $kolik;
    

?>