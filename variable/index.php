<?php

$str = "php";
echo "Hello $str <br/>"; 

$x = 10;
$z = 20;

function myFunc() {
    $y = 26;
    echo "He is $y years old <br/>";
}
myFunc();
echo "He is $x years old <br/>";

function myFunc2() {
    global $str, $x;
    echo "He loves $str, and he has $x years of experience.<br/>";
}

myFunc2();

function myFunc3() {
    $GLOBALS ['str'] = $GLOBALS ['x'] + $GLOBALS ['z'];
}

myFunc3();
echo $str, "<br/>";

function myFunc4() {
    //$x = 0;
    static $x = 0;
    echo $x, "<br/>";
    $x++;
}

myFunc4();
myFunc4();
myFunc4();

$city = "Dhaka";
$$city = "104 square mile";

echo "$city is the capital of Bangladesh <br/>";
echo "The size of $city is $Dhaka <br/>";
echo "The size of $city is {$$city} <br/>";

$h = "Hello";
$Bar = "h";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";

echo $h, "<br/>";
echo $$h, "<br/>";
echo $$$h, "<br/>";
echo $$$$h, "<br/>";
echo $$$$$h, "<br/>";
echo $$$$$$h, "<br/>";

$a = "Hi there <br/>";
$b = $a;
$b = "See you later <br/>";
echo $a;
echo $b;

$c = "Hi there <br/>";
$d = &$c;
$d = "See you later <br/>";
echo $c;
echo $d;

$e = "Hi there <br/>";
$f = &$e;
$f = "See you later <br/>";
$e = "Goodbye <br/>";
echo $e;
echo $f;

function goodbye(&$greetings) {
    $greetings = "Bye <br/>";
}
$myGreetings = "Hi there <br/>";
goodbye($myGreetings);
echo $myGreetings;

function foo (&$var){
    $var++;
}
$myVar = 3;
foo($myVar);
echo $myVar, "<br/>";  

$g = 10;
function &myFunc5() {
    global $g;
    return $g;
}

$i = &myFunc5();
//$i=12;
$i++;
echo $i,"<br/>";

$rockBands = ["Metallica", "Iron Maiden", "Green Day"];

foreach ($rockBands as &$rockBand){
    $rockBand = strtoupper($rockBand);
}

echo "<pre>";
print_r($rockBands);
echo "<pre>";

const TEST1 = "Hello Bangladesh";
define("TEST2", "Hello Sylhet");

echo TEST1;
echo "<br/>";
echo TEST2;

$j = 3;
$k = 4;
function testGlobal1() {
    global $j, $k;
    echo "<br/>";
    echo $j+$k;
}
testGlobal1();

function testGlobal2() {
    echo "<br/>";
    echo $GLOBALS['j'] + $GLOBALS['k'];
}
testGlobal2();

function testGlobal3() {
    global $l;
    $l = 10 + 53;
}

testGlobal3();
echo "<br/>";
echo $l;

function testGlobal4() {
    $GLOBALS ['l'] = 10+20;
}

testGlobal4();
echo "<br/>";
echo $l;
