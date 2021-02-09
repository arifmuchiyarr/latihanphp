<?php

for ($i=10; $i>0 ; $i--) { 
    
    for ($j=1; $j<=$i ; $j++) { 
        echo " &nbsp; ";
    }
    for ($k=10; $k > $i ; $k--) { 
        echo "*";
    }
    for ($l=10; $l > $i ; $l--) { 
        echo "*";
    }

    echo "<br />" ;
}