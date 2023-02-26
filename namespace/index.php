<?php
// include ("MyProject1.php");
// include ("MyProject2.php");

// echo "Hello php";

// echo "<h1>From MyProject1</h1>";
// echo MyProject1\a, "<br/>"; 
// echo MyProject1\test(), "<br/>";
// $obj = new MyProject1\Test;
// $obj->b;
// $obj->sayHello();

// echo "<h1>From MyProject2</h1>";
// echo MyProject2\a, "<br/>"; 
// echo MyProject2\test(), "<br/>";
// $obj = new MyProject2\Test;
// $obj->b;
// $obj->sayHello();

namespace MyProject3;
const c = "hello";
function test() {
    echo c," I am from project3";
};

class Test{
    public $d = "Italy";
    function sayHello($name) {
        echo "Hello ", $name , ", I am from MyProject3";
    }
}

use MyProject3;
echo MyProject3\c, "<br/>";
echo MyProject3\test(),"<br/>";
$obj = new MyProject3\Test;
echo $obj->d, "<br/>";
$obj->sayHello("France");




    
