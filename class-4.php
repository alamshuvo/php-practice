<?php
//ajke function nyea class kora hobe ,php er bitor function ki jinis :function  k akta block dorte parben ei code k var var use kora jai .block akare reke reuse kora jai .php er modde built in function ache onk .array related onk function built in ache .function likhar age amra sadarono function likhte hobe nice syntax te dekhano holo .jokhoni amra function likhi ,obossoi function k call korte hobe jekono jagai.
// function name(){
//     echo "hellow world ";
// }
// name();

// function fullName($firstName,$secondName){
//     echo $firstName . ' ' . $secondName ;

// }
// fullName("iftakhar","alam");   //arguments 
//function er bitore use korar jonno jgule likha hoi take parameater bole abr perametar er value jokhn declare kora hoi segule k argument bole .


// function sum ( int $num1, int $num2){
//     $total =$num1+$num2;
//     return $total ;

// }
//  echo sum(100,"100") .PHP_EOL;
//  echo sum(80,50);
//php 7 tekhe parametar er type bole deya jai 



// function makeCoffe($types=array("capacino"),$coffeMaker=NULL){
//     $device = is_null($coffeMaker) ? " hands" :$coffeMaker;
//     return "Making a cup of ". join ("-",$types) . " with $device .\n";

// }
// echo makeCoffe(["capachino","lavaza","nescafe","another"],"teapot");


// function sum (int $a,int $b){
//     $c=$a+$b;
//     return $c;
// }
//  echo sum(10,20) . PHP_EOL;


//  function another(&$value){
//     $value +=10;

//  }
//  $num=2;
//  another($num);
//  echo $num;


//unlimited parameater::

// function sum(...$numbers){
//     $total=0;
//     foreach($numbers as $number){
//         $total += $number ;
        
//     }
//     return $total;

// }
//  echo sum(1,2,3,6,4,5);



//amra caile function er bitore abr function likhte pari.


// function avg(...$numbers){
//     $total=sum(...$numbers);
//     $length=count($numbers);
//     return $total/$length;

// }
//  echo avg(2,2,2,4,10);




//^ recursive function::
//j function nijei nijeke call kore take ak kothai recursive function bole.
//ei function dyea life easy o kore dewa jabe abr life hell kore dyea jabe
//recursive er function er khetrre pc ke onk time e hang kore dewa jai 
// function number($n){
//     echo $n . "\n";
//     $n++;
//     number($n);
// }
// number(1);

//^recursive function use case :
    // function number($n){
    //     if ($n<=1) {
    //         return 1;
    //     } else {
    //         return $n*number($n-1);
    //     }
        
    // }
    // echo number(-100);
    //!kon time e recursive k tamathe hoi seta agei likhte hoi na hoi eta infiniti hoyea jabe.


    //*function scope er moddhe bairer kono variable kaj kore na ,jodi kaj korano lage tahole oi variable er age global likhte hoi .
    // $x=10;
    // function another (){
    //     global $x;
    //     return $x;
    // }
    // echo another();


    