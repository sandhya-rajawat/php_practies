<?php
echo "welcome back to function ";



function number(){
  static $count=0;
  $count++;
  echo $count;
}
number();
number();
number();
echo __file__;

?>