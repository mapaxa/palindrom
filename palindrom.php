<?php $string = 'a roza upala na lapu azora';
        
        function palindrom($string) {
            $string = str_replace(' ', '', $string);
            for($i=0; $i<=strlen($string)-1; $i++) {
                if($string[$i] == $string[strlen($string)-1-$i]){
                    echo $string[$i] . ' == '. $string[strlen($string)-1-$i] . "\r\n" ;
                    $i++;    
                }
                else {
                    return 'слово ' . $string . ' - не палиндром';
                    break;
                }
            }
            return 'слово ' . $string . ' - палиндром';
        }
        
        
        echo palindrom($string); ?>