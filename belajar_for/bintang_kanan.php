<?php


for ($i=10; $i > 0 ; $i--) { 
    
    for ($j=1; $j <= $i ; $j++) { 
        echo " &nbsp; ";
    }

    for ($k=10; $k > $i ; $k--) { 
        echo "*";
    }

    echo "<br />";
}