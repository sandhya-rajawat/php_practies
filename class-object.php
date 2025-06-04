<?php
// class course{
//   public function subject($hindi,$english,$math){
//     $allsub=[$hindi,$english,$math];
//     return $allsub;

//   }
// }
// $obj=new course();
// $sub=$obj->subject(34,56,67);
//  echo "subject" .implode(',',$sub);

// constructor...........
// class gender{
//   public $male;
//   public$female;
//   public function __construct($male,$female){
//     $this->male=$male;
//     $this->female=$female;
//   }
//   function get_gen(){
//     echo "male:".$this->male;
//     echo "<br>";
//     echo "female".$this->female;
//   }


//   }
//   $obj=new gender("rahul","sunita");
//   $obj->get_gen();

// class Logger {
//   public $message;

//   public function __construct($msg) {
//     $this->message = $msg;
//   }

//   public function __destruct() {
//     echo "Logging: " . $this->message;
//   }
// }
// $obj = new Logger("User logged out");
// Output at end: Logging: User logged out
// accessible modification.......................
// public class
// class publicClass{
//   public $name ='sandhya';
//   public function __construct($name=false)

//   { 
//     if($name!==false){
//      $this->name=$name;
//     }


//   }
//   public function get_fun(){
//     echo $this->name;
//   }

// }
// $obj=new publicClass();
// echo $obj->name;
// $obj->get_fun(); 
// class parentclass
// {
//   private $father = 'papa';
//   private function get_papa()
//   {
//     echo"my fathershab";
//   }
// }

// class child extends parentclass
// {
//   public $mother = 'maa';
//   function get_mother($mother=null)
//   {
//     if($mother !== null){
//    echo $this->mother = $mother;
//     }
//     echo $this->father;
//     $this->get_papa();


//   }
// }
// $obj2 = new parentclass();
//  $obj2->get_papa();



// inheritance........................
// class fruit
// {
//   public $name = 'mango';
//   public $brand = 'dehli';
//   function __construct($name=null, $brand=null)
//   {
//     if($name !==null && $brand !== null){
//  $this->name = $name;
//     $this->brand = $brand;
//     }
   
//   }
//   function get_fruits()
//   {
//     echo "this is a" . '' . $this->name  . 'my favourite fruit is'  . $this->brand;
//   }
// }
// class childFruit extends fruit
// {
//   function childfun()
//   {
//     echo 'hello Im sandhya rajawat!! '.$this->name;
//     echo "<br>";  
//   }
// }
// $childfruit = new childFruit();
// $childfruit->childfun();
// $childfruit->get_fruits();

// constants..................

// abstract class.....................
// abstract class myabstract{
// abstract function abstractcheck();

// function add($a,$b){
//   echo "this is print".$a+$b;
//     echo "<br>";
// }
// }

// class updatechile extends myabstract{
//   function  abstractcheck(){
//     echo "this is my parents bigchild!!";
//     echo "<br>";
//   }
//   function add($a,$b){
//     echo "this is multiplie".$a*$b;
//      echo "<br>";
//      parent::add($a,$b);
//   }

// }
// $obj=new updatechile();
// $obj->abstractcheck();
// $obj->add(10,20);

// interface.............
// interface bigBro{
//  function name($name);
// }
// interface smallBro{
//   function lastname($lastname);

// }
// class smallSis implements bigBro , smallBro{
// function name($name){
//   echo 'My name is'.' ' .$name;
//   echo "<br>";
// }
// function lastname($lastname){
//   echo "My last name is".' '.$lastname;
// }
// }
// $obj=new smallSis();
// $obj->name("sandhya");
// $obj->lastname("rajawat");


// traits...........................
// trait All_In_One{
//   function profile(){
//     echo ucwords("my name is sandhya  rajawat\n now im grudated student");
//   }
// }
// class A{
//   use All_In_One;
//   function add($a,$b){
//  return array($a+$b);
//   }
 
// }
// class B{
//   use All_In_One;
//   function sub($a,$b){
//  return array($a-$b);
//   }
 
// }

// $obj=new A();
// $obj->profile();
// $a=$obj->add(10,10);
// echo implode($a);
// echo"<br>";
// $obj=new B();
// $obj->profile();
// $b=$obj->sub(10,10);
// echo implode($b);
// echo"<br>";

// static method............................
// method 1
// class person{
//  public  static $name="sandhya Rajawat";
//   public static function name($namechange){
//     echo self::$name;
//     echo $namechange;
//   }
// }
// person::name('Miss sandhya');

// method 2..............when we are used the var in the child class we used the parent::$var
//  class person{
//  public  static $name="sandhya Rajawat";
 
//   }

//   class man extends person{
//      public static function name(){
//     echo parent::$name;

//   }
// }
// $obj=new man();
// $obj->name();

// late_static_binding...........uff! 3 method......................

// class personal{
//    public static $name="sandhya rajawat";
//   public static function name(){
//     echo self::$name;
//   }
// }
// class myprivate extends personal{
//   public static $name="sandyjii";

// }
// $obj=new myprivate();
// $obj->name();.......................we are used static and why bsc its return sandhya rajawat


// class personal{
//    public static $name="sandhya rajawat";
//   public static function name(){
//     echo static::$name;
//   }
// }
// class myprivate extends personal{
//   public static $name="sandyjii";

// }
// $obj=new myprivate();
// $obj->name();

// namespace...........................................
