<?php
/**
 * Created by PhpStorm.
 * User: ardakazanci
 * Date: 24.03.2017
 * Time: 23:13
 */

#
#
# range fonksiyonu belli aralıkta değerleri ekrana sunar.
#
#

print_r(range(0,10));

echo "<br>";


#
#
# number_format sayıları binlik formatlara ayırır. Türkiye'de noktadır , ondalık ayırıcı ise virgüldür.
#
#


$sayi1 = 10843;

echo number_format($sayi1); // 10,843

echo "<br>";

echo number_format($sayi1,2); // 10,843.00

echo "<br>";

echo number_format($sayi1,2,',','.'); // 10.843,00 -> sayıyı binlik kısmını nokta ile ayırıp , sonuna 2 sıfırı virgülden sonra atar.

$sayi2 = 1234.56;

echo "<br>";

echo number_format($sayi2); // 1,235

echo "<br>";

echo number_format($sayi2,2,',','.'); // 1.234,56

echo "<br>";

#
#
# Yuvarlama fonksiyonları : floor , ceil , round
#
#


$sayi3 = 12.456;

echo floor($sayi3); // 12

echo "<br>";

echo ceil($sayi3); // 13 - Bir üst tam sayıya yuvarlar

echo "<br>";

echo round($sayi3); // 12 , En yakın tam sayıya yuvarlar.

echo "<br>";

#
#
# Rastgele sayı üreten fonksiyonlar : mt_rand() srand() rand() mt_srand()
#
#

echo rand();

#
#
# Matematiksel fonksiyonlar pow , abs , exp ->e sayının kuvvetini verir , log , log 10 , pi , sqrt
#
#

$sayi4 = 36;

echo "<br>";

echo "Üs alma pow :  ".pow(36,2); // üssü kaç alınsın belirtilmeli

echo "<br>";

echo "Mutlak değer alma abs : ".abs(-5);

echo "<br>";

echo "E sayısını hesaplama exp : ".exp(15);

echo "<br>";

echo "Logaritma hesabı log : ".log(14);

echo "<br>";

echo "Logaritma hesabı 10 tabanında  log10 : ".log10(3);

echo "<br>";

echo "Pi sayısı , pi() : ".pi();

echo "<br>";

echo "Karekök hesabı sqrt : ".sqrt(321);

echo "Maksimum sayı max(sayi1,sayi2...) : ".max(1,2,3,4,5);

echo "<br>";

echo "Minimum sayı : ".min(4,5,3,1,2,0);

echo "<br>";

#
#
# gettype($degisken_ismi); ile değişkenin veritipini öğrenebiliriz.
#
#


#
#
# settype ile veritipi değişikliği sağlanır ince nokta string bir değişken değiştirilemez.
#
#

$sayi5 = 6.10;

settype($sayi5,'integer'); // Ondalık sayı tam sayıya çevirilir 6 yazar

echo $sayi5;

echo "<br>";

#
#
# settype kullanmadan object string float int fonksiyonları kullanılarak tür dönüşümü yapılabilir.
#
#

$sayi6 = "10.465 TL";

echo (int)$sayi6; // 10

echo "<br>";

echo (string)$sayi6;

echo "<br>";

echo (float)$sayi6;

#
#
# Kaçış Karakterleri
#
#


// \'    -> Tek tırnak içerisinde tek tırnak işaretini etkisiz kılar
// \"    -> Çift tırnak içerisinde çift tırnak işaretini etkisiz kılar
// \\    -> Çift tırnak içerisinde terk bölü  işaretini etkisiz kılar
// \$    -> Tek başına veya çift tırnak işareti içerisinde değişkeni etkisiz hale getirmek için kullanılır.
// \n \r \t -> n -> html ' de kullanılar br anlamını taşır. Çift tırnak işareti içerisinde kullanılır.
// \n \r \t -> t ise boşluk verir. Html ' de ki &nbsp; ile aynı anlamı taşır.
// \n \r \t -> r ise windows ' a özgü satır başı işlemi yapar. 



?>