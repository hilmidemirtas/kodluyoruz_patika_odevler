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

function triangle($value)
{
    if ($value >= 1) {
        $counter = 1;
        $result = "";
        while ($counter <= $value) {
            for ($i = 1; $i <= $counter; $i++) {
                $result .= 0;
            }
            $result .= "<br>";
            $counter++;
        }
    } else {
        $result = "Please enter a number of 1 or greater.";
    }
    return $result;
}

echo triangle(15);
