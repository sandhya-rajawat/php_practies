<?php
// operators in php...........
/*arithmetic operators
assignment operators
comparison
logical
*/
// quize of tasks
/*write a program TO allow a driver to drive only  when hisage is gretherthan or equal 25
and less than or equal to 65.
*/
$agefordriveing=25;
if($agefordriveing <= 45 && $agefordriveing >=25){
  echo "You Can take your licence!!";
}
elseif ($agefordriveing <= 25 ){
 echo "allow you take your licence!!";
 
}
elseif ($agefordriveing >20){
  echo 'not allow';
}
else{
  echo 'not take my permission';
}