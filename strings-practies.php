<?php
// include './form.php';

// // 1.Write a PHP script to find the length of a string.
// $name='sandhya rajwat';
// echo strlen($name);
// // 2.Create a script that counts how many times the word "PHP" appears in a string.
// echo "<br>";
// echo str_word_count($name);
// echo "<br>";
// // 3. Convert a string to uppercase and lowercase.
// echo strtoupper($name);
// echo "<br>";
// echo strtolower($name);
// // 4. Reverse a given string without using 
// echo "<br>";
// echo  strrev($name);
// echo "<br>";

// // 7. Find the position of the word "web" in a string.
// $webdevelopment='this is your web page loocking good!!';
// echo strpos($webdevelopment,'web');



// // array...............................................................................
// // 1.Create an array of fruits and print all fruits using a loop.

// $fruit1=array('mango', 'orange', 'grapes', 'banana', 'sctorberry', 'blackberry');
// $fruit2=array('sandhya', 'raghvi', 'suresh', 'kamal','mango','orange');
// foreach($fruit as $fruits){
//   echo "<pre>";
// print_r($fruits);
// echo"</pre>";
// }
// // 2.Write a program to sort an array in ascending and descending order.

//  sort($fruit);
//  rsort($fruit);
// for($i=0;$i<count($fruit);$i++){
//   echo ($fruit[$i]);
//   echo "<br>";
// }

// // 3.Merge two arrays and remove duplicate values.
// $i=array_merge($fruit1,$fruit2);
// $y=array_unique($i);
// foreach($y as $x){
// echo "<pre>";
// print_r($x);

// echo "</pre>";

// }


// // 4.Find the maximum and minimum number in an array.
// $number=[2,4,6,5,334,566,23,46,78,9];
// $max =max($number);
// $min =min($number);
// $count=count($number);
// echo($number[1]);
// echo "thi....<br>";

// for($i=0;$i<=count($number);$i++){
//   echo $number[$i];
//   echo "<br>";
// }
// echo "max :".$max ;
// echo "min :".$min ;
// echo "count :".$count ;
// // 5.Convert an array to a comma-separated string.;
// $string=implode(",",$number);
// echo $string;

// 🧮 Math Constants & Operators.............................
// 1.Create a calculator using +, -, *, /, and % operators.
// $x=22;
// $y=45;
// echo($x + $y);
// echo "<br>";

// echo($x - $y);
// echo "<br>";

// echo($x * $y);
// echo "<br>";

// echo($x / $y);
// echo "<br>";

// echo($x % $y);
// // echo "<br>";
// // 2.Use pow(), sqrt(), abs() to solve math expressions.;
// $x=800;

// echo pow($x,2);
// echo "<br>";
// echo sqrt($x);
// echo "<br>";
// echo abs(23.5);
// echo "<br>";

// 3.Display the value of pi using M_PI.
// echo "this is value of M_PI".M_PI;
// echo "<br>";
// echo "this is value of PI".pi();
// 4.Write a function to calculate the area of a circle (using radius input).
// 5.Find if a number is even or odd using modulus %.



// if(isset($_POST['submit'])){
//   $value=$_POST['value'];
  
//     if (is_numeric($value)) {
//         echo "You entered the number: " . htmlspecialchars($value);
//     } else {
//         echo "Please enter a valid number.";
//     }
// } else {
//     echo "Please submit the form.";
// }
// if($value%2==0){
//   echo "this is even";
// }
// else{
//   echo "this is odd";
// }


// ⚖️ If / Else / Elseif / Switch..........................
// 1.Write a script to check if a number is positive, negative, or zero.
// if(isset($_POST['submit'])){
//   $value=$_POST['value'];
//   if(is_numeric($value)){
//     if($value > 0){
//       echo "this values is poositive";
//     }
//     elseif($value <0){
//       echo "this values is negetive";
//     }
//     else{
//       echo"this is zero value";
//     }
//     }
   
  
// }

// 2.Check if a person is eligible to vote (age >= 18).

// if(isset($_POST['submit'])){
//   $age=$_POST['value'];
//   if(is_numeric($age)){
//     if($age>=18){
//   echo"You can vote and make good india";
//     }

  
//  else{
//     echo "Sorry you are not alligibale for the vote";
//   }
 
// }
//  else{
//     echo "ky huaa print nhi huaa";
//   }

// }


// 3.Use switch to print the day of the week based on a number (1-7).
// $weeks=['monday','tuesday','wenday','thursday','friday','saturday','sunday'];
// switch('monday'){
//   case 'monday':{
//    echo "today is Monday";
// break;
//   }

//   case 'tuesday':{
//    echo "today is tuesday";
//    break;
//   }

//   case 'thursday':{
//    echo "today is thursday";
//    break;
//   }

//   case 'friday':{
//    echo "today is friday";
//    break;
//   }

//   case 'saturday':{
//    echo "today is saturday";
//    break;
//   }

//   case 'sunday':{
//    echo "today is sunday";
//    break;
//   }



// }
// 4.Compare two numbers and print which is larger.;
// if(isset($_POST['submit']))
// {
//   $number1=$_POST['value'];
//   $number2=$_POST['value2'];
//   if(is_numeric($number1)&& is_numeric($number2)){
//     if($number1>$number2){
//       echo "this is value is grather than number1";
//     }
//     elseif($number2>$number1){
//       echo "this is value is grather than number2";
//     }
//     else{
//       echo"time pass agains";
//     }
//   }
// }

// // 5.Write a grade evaluator (A, B, C, D, F) using if-elseif.

// if(isset($_POST['submit'])){
//   $marks=$_POST['value'];
//   if(is_numeric($marks)){
//     if($marks<=50){
//       echo "c";
//     }
//     elseif($marks<=80){
//       echo "b";
//     }
//     elseif($marks<=90){
//       echo "A";
//     }
//     elseif($marks<=20){
//       echo "f";
//     }
//     elseif($marks<=10){
//       echo "D";
//     }
//     else{
//       echo "what is your upcomping ressult";
//     }
//   }

// }loop.................................................................
// for($i=1;$i<=10;$i++){
  
//   echo $i;
//   echo "<br>";
// }

// 2.Print even numbers between 1 to 20 using while loop.;
// $x=0;
// while($x<=20){
//   echo $x;
//   echo "<br>";
//   $x+=2;
// }

// 3.Loop through an array of names using foreach.;
// $name=['sandhya','rajveer','kulshreth','shiv','abhay','tanu','sapana','priyanka'];
// foreach($name as $names){
//   echo"<pre>";
//   print_r($names);
//   echo"</pre>";
// }


// 4.Create a multiplication table of a number (e.g., 5 x 1 = 5 to 5 x 10 = 50).

// for($x=1;$x<=10;$x++){
 
//     echo $x*5;
//       echo "<br>";
//   }

// 5.Print factorial of a number using a loop.;

// $num = 5;
// $factorial = 1;

// for ($i = 1; $i <= $num; $i++) {
//     $factorial *= $i;
// }

// echo "Factorial of $num is: $factorial";


//  Functions...........................................................................
// 1.Create a function to add two numbers and return the result.
// function add($x,$y){
//   $sum=$x + $y;
//   echo($sum);
//   return $sum;
// }
// add(9,3);

// 2.Write a function to check if a number is prime.
// 3.Create a function that accepts a string and returns the number of vowels.
// $name='sandhyaioe';
// function vowels(){
//   if($name)

// }
// 4.Create a function to generate a random password.
function password(){
  echo rand(2,10);
}
password();

 






