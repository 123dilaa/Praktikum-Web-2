<?php
    //buat fungsi
    function hitungUmur($thn_lahir){
        //code fungsi 
        $thn_sekarang = 2024;
        //hitung Umur
        $umur = $thn_sekarang - $thn_lahir;
        //Tampilin Umur
        # echo $umur;
        //kembaliin umur
        return $umur;

    }
    //panggil fungsi
    echo "Umur Saya Adalah " . hitungUmur(2004);
?>