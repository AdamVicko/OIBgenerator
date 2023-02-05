<?php

declare(strict_types=1);

class Oib
{
    public function __construct(int $brojOiba2)
    {
        $x=0;//brojac
        while($x < $brojOiba2)
        {
            $rand = []; // isprazni array
            for($i=0; $i < 10; $i++)
            {
                $rand[] = random_int(0 , 9); //random niz od 10 brojeva na kraju mu dodajemo kontrolnu znamenku
            }
                for($j=0; $j < 10; $j++)
                {
                    // matematicki izracun za kontrolnu znamenku(11)

                    $firstNum = intval($rand[$j]); 
                    $ostatak = 0; // deklaracija prije pozivanja u petlji
                    if($j === 0)
                    {
                        $firstNum += 10;
                        $ostatak = $firstNum % 10;

                        if($ostatak === 0)
                        {
                            $ostatak = 10;
                        }
                        $ostatak *= 2;
                        $ostatak %= 11;
                    }
                    else
                    {
                        $firstNum += $ostatak;
                        $ostatak = $firstNum % 10;
                        if($ostatak === 0)
                        {
                            $ostatak = 10;
                        }
                        $ostatak *= 2;
                        $ostatak %= 11;
                    }
                }
            
            if($ostatak === 1)
            {
                $kontrolniBroj = 0;
            }
            else
            {
            $kontrolniBroj = 11 - $ostatak;
            }
            $rand[] = $kontrolniBroj; //dodaj mu kontrolnu znamenku
            $cijeliOib = implode($rand); //pretvori array u string i spremi ga
            echo $cijeliOib . "\r\n";  // . PHP_EOL , . "\n"  moguce zamjene za end of line
            $x++;//brojac
        }
    }   
}


