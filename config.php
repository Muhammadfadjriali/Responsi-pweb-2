<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"Nama penyewa :");
    fwrite($file, $nama ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Alamat :");
    fwrite($file, $alamat ."\n");
    fwrite($file,"Mobil :");
    fwrite($file, $mobil ."\n");
     fwrite($file,"No plat :");
    fwrite($file, $plat ."\n");
    fclose($file);
    header("location: index.php");
 ?>
