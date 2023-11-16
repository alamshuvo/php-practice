
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(5==6): ?>
        <h1>Hellow world</h1>
        <?php endif; ?>
</body>
</html>




<?php

// <!-- print f 
// <!-- %s return string  -->
// %d return 
// $firstName = "Iftakhar";
// $lastName = "alam";
// printf ('my name is %s %s',$firstName ,$lastName);
// printf ('my name is %2$s %1$s',$firstName ,$lastName);




//sprintf:::
// $firstName = "Iftakhar";
// $lastName = "alam";
//  $another = sprintf ('my name is %s %s',$firstName ,$lastName);
//  echo $another;




// *if condition :: 
// *else ::
// *else if ::


    // **if condition ::


    // if er condition jodi match hoi tahole if er block e dukbe na hoi if er block e dukbe na se else takhle else e cole jabe

//     $a=10;
//     $b=20;
//     if ($a<$b) {
//         echo "The condition is true";
//     }
//     else if ($a==$b){
//         echo "This condition says that a is equal to b";
//     }
//     else if ($a!=$b){
//         echo "This condition says that a is not equal to b";
//     }

//   else{
//     echo "This condition is not true plese input valid value";
//   }


//real life sadaronoto amra 3 tar besi condition check na korai balo jodi 3 taar besi condition check cole ase tahole if dyea na kore switch or loop dyea korte pari amra 



//jokhon amra wordpress nyea kaj korvo tokon evabei likhte hobe
// $a=7;
// if($a==5):
//     echo "a equals to 5";
//     elseif($a==6):
//         echo "a equals to 6";
//     else:
//         echo "a is another";

// endif;


//wordpress e condition loop er calanor alada niom tahe ,if condition gulo sadaronoto eivabe kaj kore 

//ternary operator::

// $a=7;

//  echo $a==7 ? 'this is 7':'this is not 7';

// $a = 10;
// $b = 20;

// echo ($a==$b) ? "this is equal " : "This is not equal";

//terneary operator er syntax holo eguli


//about switch case ::

// amra atokkhon if else if else eirokom vabe likhe gechi na ,jotil kore but switch case e r o shortcut e likha jai .ba condition gulo check kora jai.

// switch (n){
//     case lavel1 :
//         echo "this is something";
//         break;                                (syntax of switch case) 
//         case lavel2:
//             echo "this is lavel 2 something";
//             break;
//             default:
//             echo "default";
//         }




// $n = "blue";
// switch ($n){
//     case "red":
//         echo "the color is red .";
//         break;
//         case "green":
//             echo "the color is green";
//             break;
//             case "blue":
//                 echo "the color is blue.";
//                 break;
//                 default:
//                 echo "this is not a color";

// }
//kkn if else likhbo r kkn switch likhbo ,eta sompurno nijer upor depand kore .if else  jodi 3 ta condition er upor cole jai sekhetre switch a korar jonno try korte hobe .



//loop:::
//loop holo cokrakare gure jeta ,php er bitor loop likha jai koyak babe akta 1.while loop 2.Do while 3.for loop >>1 for in loop 2  for of loop 3 for each loop .eguli sob gulo loop er udahoron .amra kaj korte korete bolte parbo kknn kon loop calabo

// $x=1;

// while ($x<=100) {
//     echo "This number is :" . $x .PHP_EOL ;
//     $x++;
// }
//while loop sadaronoto eivabe likha hhoi 

// $x=1;

// while ($x<=10) :
//     echo "This number is :" . $x .PHP_EOL ;
//     $x++;

// endwhile;
//while loop jokhon wordpress e use kora hoi tkn sadaronoto syntax evabe likha hoi 




//do while loop ..
//  while loop age akbar chek kore then output dei .but do while ekbar kono check kora cara output dyea takhe ,then porer bar check kore kaj korte takhe .

$a=1;
do {
    echo "This is first echo for do while :" .$a . PHP_EOL ;
    $a++;
} while ($a <= 5);




//sob cyea besi loop use hoi for loop r for each loop nice udahoron dekhaono holo.



// for ($i=0; $i <=5 ; $i++) { 
//     echo "this number is :" .$i.PHP_EOL;
// }

//ei looop er bitor condition bosate hobe and for loop must be balo kore sikhte hobe .


//for each loop :;
//for each loop sadaronoto array er upor loop calano hoi .
//array sadaronoto echo kora jai na ,array check korar jonno var_damp korte hoi array er index r value .index sob somoi suro hoi 0 tekhe .array takhle sadaronoto for each dyea loop calai .
// $colors = ["red","green","blue"];
// foreach($colors as $color){
//     echo $color .PHP_EOL;
// }
// foreach($colors as $key => $value){
//     echo "key is $key : value is $value : " .PHP_EOL;

// }
//jokkhon  aksayhe key o value aksathe pabo tkn sadaronoto amra ai syntax ta use kore takhi .


//ei class e function nyea just cotokhato kore dekhano holo 
//shudu return ta ki kaje bebhoratio  hooi se somporke darona dewa holo 


// function sum($X, $Y){
//     $z = $X+$Y ;
//     var_dump ($z);
//     return $z ;
// }
//  echo sum(10,5); 
 //return ta hosse shudo function er bitor kisu dekhate cassilam ta seta dekhaite return use kora hoi .



 //recoured,,, include 