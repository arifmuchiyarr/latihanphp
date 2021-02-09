<?php
$setengahtinggi;$i;$j;$k;$l=1;$n;
$tinggi=300;
$setengahtinggi=$tinggi/2;
        for($i=0;$i<$setengahtinggi;$i++){ //lakukan perulangan didalam perulangan i, ini berfungsi untuk mencetak spasi sebelum dicetak *
            for($j=$setengahtinggi;$j>$i;$j--){
              echo " &nbsp; ";
            }
            
            for($k=1;$k<=$l;$k++){ //kemudian lakuakan perulangan untuk mecetak bintang dan spasi
                if($k==1 || $k==$l){//lakukan pengecekan apabila k=1 atau k=l
                    echo "*";//maka cetak *
                }else{
                    echo " &nbsp; ";//jika tidak maka cetak spasi sesudah *
                }
            }
            $l+=2;
            echo "n";
        }
        //ini untuk mencetak bagian bawah belah ketupatnya, kurang lebih penjelasannya seperti di atas
        $l -=2;
          
        for($i=0;$i<$setengahtinggi;$i++){
            for($j=0;$j<=$i;$j++){
              echo " &nbsp; ";
            }
            
            for($j=$l;$j>0;$j--){
              if($j==1 || $j==$l){
                echo "*";
              }else{
                echo " &nbsp; ";
              }
            }
            $l-=2;
            echo "n";
        }
    
        $setengahtinggi=($tinggi/2);
        for($i=0;i<$setengahtinggi;$i++){
            for($j=$setengahtinggi;$j>=$i;$j--){
              echo " ";
            }
            for($k=1;$k<=l;$k++){
              if($k==1 || $k==$l){
                echo "*";
              }else{
                echo " &nbsp; ";
              }
            }
            $l+=2;
            echo "n";
        }
        for($i=0;$i<$tinggi-$setengahtinggi;$i++){
            for($j=0;$j<=$i;$j++){
              echo " &nbsp; ";
            }
            for($j=$l;$j>0;$j--){
              if($j==$l || $j==1){
                echo "*";
              }else{
                echo " &nbsp; ";
              }
            }
            $l-=2;
            echo "n";
        }

        $l-=2;
        echo "n";
    
    
