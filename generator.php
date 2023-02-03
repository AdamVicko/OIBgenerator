<?php

declare(strict_types=1);


    for(;;){ //validator dali je unesni broj oiba pozitivni integer

        $brojoiba = readline('Unesi kolicinu potrebnih OIB-a : ');


       if ( strval($brojoiba) == strval(intval($brojoiba)) && strval(intval($brojoiba)) > 0 ) { 
            //usporei vrijednost stringa(brojoiba) dali je ona integer od stringa(brojoiba) i provjeri dali je broj veci od 0
            break;
          }
    }
    $x=0;
    while($x < $brojoiba){
        for($i=0; $i < 10; $i++){
            $rand[] = random_int(0 , 9); 
        }




            for($j=0; $j < 10; $j++){

                $firstnum = $rand[$j];
                if($j===0){
                    $firstnum += 10;
                    $ostatak = $firstnum % 10;
                    
                    
                    if($ostatak === 0){
                        $ostatak = 10;
                    }
    
                    $ostatak *= 2;
                    
                    $ostatak %= 11;
                    
                }else{
                    $firstnum += $ostatak;
                    $ostatak = $firstnum % 10;
                    if($ostatak === 0){
                        $ostatak = 10;
                    }
    
                    $ostatak *= 2;
                    
                    $ostatak %= 11;
                }
            }
        
        if($ostatak === 1){
            $kontrolnibroj = 0;
        }else{
            
        $kontrolnibroj = 11 - $ostatak;
        
        }
        $rand[] = $kontrolnibroj;
        $cijelioib = implode($rand);
        echo $cijelioib . PHP_EOL;
        $rand = []; // isprazni array
        $x++;
    }