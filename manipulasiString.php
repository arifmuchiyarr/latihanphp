<?php
/*
jika ada karakter + maka sebelumnya menjadi huruf besar,
jika ada karakter - maka sebelumnya menjadi huruf kecil

format masukan n<50
format keluaran kata yang sudah rapih

contoh masukan 
DI-NA-m+iK
output 
DiNaMiK
*/

// $teks = "DI-NA-m+iK";
// echo "text sebelum di ubah ".$teks. "<br>";
// if (strlen($text) < 50) {
//     //proses nya disini
//     //1. cari karakter - atau +
//     //2. ubah karakter sebelumnya menjadi besar atau kecil
//     //3. hapus karakter +  atau -

//     for($i=0; $i<strlen($teks); $i++){
//         if($text[$i] == '+'){
//             $text[$i-1] = strtoupper($text[$i-1]);
//             str_replace($i,"",$teks);
//         }elseif ($text[$i] == '-') {
//             $text[$i-1] = strtolower($text[$i-1]);
//             str_replace($i,"",$teks);
//         }
//     }

// }

if (!empty($_POST["nama"])) {
    $text = $_POST["nama"];echo "text sebelum di ubah ".$text;
    $text2 = strlen($text);
    $text1;
    
        //proses nya disini
        //1. cari karakter - atau +
        //2. ubah karakter sebelumnya menjadi besar atau kecil
        //3. hapus karakter +  atau -
    
        for($i=0; $i< $text2; $i++){
            if($text[$i] == '+'){
                $text[$i-1] = strtoupper($text[$i-1]);
                $text1=str_replace($i,"",$teks);
            }elseif ($text[$i] == '-') {
                $text[$i-1] = strtolower($text[$i-1]);
                $text1=str_replace($i,"",$teks);
                
            }
            echo $text1;
        }
    
    }

    
    



?>
<form action="" method="post">
    Nama: <input type="text" name="nama"><br>
    <input type="submit" value="submit">
</form>