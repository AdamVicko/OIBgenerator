<?php


//camelCase

declare(strict_types=1);
include_once 'Generator.php';

function komOib() //broj zeljenih oiba
    {
        for(;;)
        { //validator dali je unesni broj oiba pozitivni integer
            $komOib = readline('Unesi kolicinu potrebnih OIB-a: ');
            if ($komOib == intval($komOib) && $komOib > 0) // == netrebaju biti isti tip usporedujem vrijednost
                { 
                 break;
                }
        }
        return $komOib;
    }
    $kolicinaOiba = intval(komOib()); // pretvori u int
    $oib = new Oib($kolicinaOiba); // proslijedi construcotru vrijednost varijable brojoiba1
                                //losa praksa nazivati varijable isto i dodavati redni broj iza




/*
 SAMO POMOCU FUNKCIJA BEZ KLASA

$oib = new Oib();


    function komoib() //broj zeljenih oiba
    {

       
        for(;;)
        { //validator dali je unesni broj oiba pozitivni integer
            
            $komoib = readline('Unesi kolicinu potrebnih OIB-a : ');
            
            if ($komoib == intval($komoib) && $komoib > 0) // == netrebaju biti isti tip usporedujem vrijednost
                { 
                 break;
                }
        }
        
        return $komoib;

    }




    $brojoiba1 = null;
    $brojoiba1 = komoib();

   

    function generator($brojoiba2) //generiranje valjanog OIB-a
    {
        $x=0;//brojac

        while($x < $brojoiba2){

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

    generator($brojoiba1);
*/