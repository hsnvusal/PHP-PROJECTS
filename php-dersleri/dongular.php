<?php 



// for ($i=0; $i < 100; $i++) { 
//     echo $i."<br>";
// }


$isimler = ["ali","ahmet","ayse"];

// for ($i=0; $i < count($isimler); $i++) { 
//     echo $isimler[$i]."<br>";
// }
$urunler = [
    ["iphone 14",4000],
    ["iphone 15",5000],
    ["iphone 16",6000],
];

foreach ($urunler as $urun) {
    echo $urun[0]." ".$urun[1]."<br>";
}





?>
