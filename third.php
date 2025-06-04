<?php
require './first.php';
require './second.php';
$obj = new first\test();
echo $obj->firstname();
echo "<br>";
$obj1=new second\test();
echo $obj1->lastname();
