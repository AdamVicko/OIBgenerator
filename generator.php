<?php

declare(strict_types=1);

class Oib
{

    public function __construct(int $brojoiba2)
    {
        
        $x=0;//brojac

        while($x < $brojoiba2)
        {

            for($i=0; $i < 10; $i++){
                $rand[] = random_int(0 , 9); //random niz od 10 brojeva na kraju mu dodajemo kontrolnu znamenku
            }
    

                for($j=0; $j < 10; $j++){
                    // matematicki izracun za kontrolnu znamenku(11)
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
    
            $rand[] = $kontrolnibroj; //dodaj mu kontrolnu znamenku
            $cijelioib = implode($rand); //pretvori array u string i spremi ga
            echo $cijelioib . PHP_EOL;
            $rand = []; // isprazni array
            $x++;//brojac

        }
    }   
}


