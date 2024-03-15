<?php
    /*if ("condition") {
        //blok statement
    }
    

    $
    if (! empety($nama))
    {
        echo "nama " .$nama;
    }*/


    /*$secretNumber = 453;
    if ($_POST['guess'] == $secretNumber){
        echo '<p> Conlaratulation!!</p>';
    } 


    if ($_nilai > 100 ){
    echo 'LULUS';
    }else {
    echo 'TIDAK LULUS';
    }



//if Else
    $secretNumber = 453;
    $_POST['guess'] = 442;
    if ($_POST['guess'] == $secretNumber){
        echo '<p> Conlaratulation! </p>';

    }
    elseif (abs ($_POST['guess'] - $secretNumber) < 10){
        echo '<p> You`re getting close! </p> ';
    }
    else{
        echo '<p>sorry!</p>';
    }*/

    //switch

    switch ($_grade){
        case 'E':
            $_predikat = 'SANGAT KURANG';
            break;
            case 'D':
                $_predikat = 'KURANG';
                break;
            default :
            $_predikat = 'tidak ada';
    }
?>