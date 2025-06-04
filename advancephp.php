<?php
// date_time
// echo "there repreated the date and time" .date("y-m-d");
// echo "<br>";
// echo "there repreated the  time".date("h:i:sa");
// $timemonth=("10:00pm:May:2025");
// echo "<br>";
// $stringtimestam=strtotime(str_replace(":","",$timemonth));
// echo date('y:m:h:sa',$stringtimestam);

// callback function
function sayhello($name){
  return 'hello'.$name;
}
function greethello($callback){
  echo $callback("sandhya" );

}
greethello('sayhello');


?>