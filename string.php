<?php
// herodoc...........
// $text= <<<'TEXT'
// is new type of string.
// TEXT;
// echo $text;
// //nowdoc
// $chat= <<<'tum'
// edjekfjkfj
// tum;
// echo $chat;

// strings functions
// strlen
// echo "<br>";
// $name="sandhya rajawat";
// echo strlen($name);
// echo "<br>";
// // str_word_count
// $YourName="sandhya Rajawat sapna";
// echo  str_word_count($YourName);
// echo "<br>";
// // strpos
// $MyPossition="You Are Sweet But Not Good Vibe";
// echo "strpos:=";
// echo strpos($MyPossition, 'A');
// echo "<br>";


// // modify strings
// // string uppercase and lowercase
// $uppperCase="sandhya Rajawat";
// echo "UpperCase:";
// echo strtoupper($uppperCase);
// echo "<br>";
// $lowercase="SANDHYA RAJAWAT";
// echo "LowerCase:";
// echo strtolower($lowercase);
// echo "<br>";
// // replace

// echo 'repalce:';
// echo str_replace("sandhya","Rajshree", $uppperCase);
// echo "<br>";
// echo "reverse:";
// echo strrev('sandhya');
// echo "<br>";
// // string trim throw the whitespace:
// echo "whitespace:";
// echo trim("sandhya rajawat");

$name = "sandhya rajawat";
echo "this is str_len:" . strlen($name);
echo "<br>";
echo "this is str_word_count:" . str_word_count($name);
echo "<br>";
$youtube = "Sap&San";
echo str_repeat($youtube, 20);
echo "<br>";

// string convert array
$stringconvertarray = "sandhya rajawat";
echo gettype($stringconvertarray);
$arraychange = explode(" ", $stringconvertarray);
echo "<pre>";
print_r( $arraychange);

echo "</pre>";
echo gettype($arraychange);
echo "<br>";

// slicing

$word="hi, how are you?";
echo substr($word,5,-3);
echo "<br>";
$word2="hi,how can help you?";
echo substr($word2,3,-4);