<?php

$number = $_POST['sayi'];


function divide($e)
{
    if ($e != "") {
        if ($e % 3 === 0) {
            echo "$e sayısının 3 ile bölümünden kalan 0, Tam bölünüyor.";

        } else  {
            $k = $e;
            $k++;
            while ($k %3 !== 0){
                $k++;
            }
            echo $e." Sayısı 3 ile tam bölünmüyor, 3 ile bölünecek ilk sayı ".$k;
        }


    } else echo "Lütfen Boş Bırakmayınız.";
}

echo divide($number);

