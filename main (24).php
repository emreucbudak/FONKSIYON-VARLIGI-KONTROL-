<?php
/******************************************************************************

Emre Üçbudak Karadeniz Teknik Üniversitesi

*******************************************************************************/
// PHP FONKSIYONLARA GIRIS
// Fonksıyonlarda varlık kontrolu

function islem() {
    static $deger = 1;
    $deger++;
    echo($deger);
}
if (function_exists("islem")) {
    echo("islem adında fonksiyon mevcut");
}
else {
    echo("islem adında fonksiyon mevcut değil");

}





?>
