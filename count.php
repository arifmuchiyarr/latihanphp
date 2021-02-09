<?php 

$array = array(60, 90, 90, 25, 40, 40, 40);
$jumlah; $temp;   
//var_dump($array);
//$string = "saya suka programming";
// foreach (count_chars($string, 1) as $i => $val)
// {
//    echo "Huruf \"" , chr($i) , "\" muncul $val kali.<br>";
// }

 for ($h=0; $h < count($array) ; $h++) { 
     for ($i=$h+1; $i < count($array); $i++) { 
         if ($array[$h]>$array[$i]) {
             $temp=$array[$i];
             $array[$i]=$array[$h];
             $array[$h]=$temp;
         }
     }
     //echo $array[$h] . " ";
 }
 echo  "<br>Banyak kemunculan data : ";
 echo"<br/>";

 for($h=0; $h<count($array); $h++)  
    {  
        $jumlah = 0;  
        for( $i=0; $i<10; $i++)  
        {  
            if($array[$h] == $array[$i]){   
                $jumlah++;  
            }
        }  
          
        /* Menghindari program menampilkan angka yang sudah 
        di tampilkan ke layar sebelumnya */  
        if($array[$h] != $array[$h-1]) { 
        echo "Angka" . $array[$h] . " : Muncul " . $jumlah  . " Kali<br/>";} 
        //cout << kumpulanData[h] << " : " << jumlah <<endl;  
    } 

 


?>