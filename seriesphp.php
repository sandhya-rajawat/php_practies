<?php
include './form.php';  
// ternary operators.................................................................
if(isset($_POST['submit'])){
  $value=$_POST['value'];
  if(is_numeric($value)){
    $batao=($value>=18)?'You have right for the vote':'sorry you are not ready';
    echo($batao);
    echo "<br>";
  }

  
}

// GOTO statement...............
for($i=1;$i<=10;$i++){
  if($i==3){
    goto sandhya;
  }
  echo $i;
}
echo "<br>";
sandhya:    
echo "hello sandhya how are you all good.";

echo"i think so its works";
echo "<br>";

// variable function....................
// function wow($name){
//   echo "this is my parents", $name;
//   }
// $fathermother="wow";
// $fathermother('sandhya');


$myrule=function ($name){
  echo "this is my parents", $name;
  };
// $fathermother="wow";
$myrule('sandhya');
echo "<br>";

// recursive function.......................
// function recursivefan(){
//  recursivefan();

// }
//  recursivefan();
echo "<br>";
function fac($num){
     if($num==1){
      return 1;
     }   
     else{
return ($num*fac($num-1));  
     }                                     



  }

  
 

echo fac(5);

?>