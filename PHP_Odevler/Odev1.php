/* Parametre olarak aldığı değer kadar satırı olan bir üçgen çizen bir fonksiyon yazın. Fonksiyon içerisinde while ve for döngülerinin her ikisini de kullanın.

ucgen(15);
15 sayısı için örnek ekren çıktısı;

O
O O
O O O
O O O O
O O O O O
O O O O O O
O O O O O O O
O O O O O O O O
O O O O O O O O O
O O O O O O O O O O
O O O O O O O O O O O
O O O O O O O O O O O O
O O O O O O O O O O O O O
O O O O O O O O O O O O O O
O O O O O O O O O O O O O O O
O O O O O O O O O O O O O O O O   */

<?php

function ucgen($deger)
{
    if ($deger >= 1) {
        $counter = 1;
        $sonuc = "";
        while ($counter <= $deger) {
            for ($i = 1; $i <= $counter; $i++) {
                $sonuc .= 0;
            }
            $sonuc .= "<br>";
            $counter++;
        }
    } else {
        $sonuc = "birden büyük sayı giriniz!";
    }
    return $sonuc;
}

echo ucgen(15);
