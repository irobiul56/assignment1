<?php

    for ($i=0; $i < 500; $i+=3) { 
    
        if ($i) {
            echo 'This is our number '. $i . ' <br>';
            if ($i%11==0) {
                break;
            }
        }
        
    }
?>