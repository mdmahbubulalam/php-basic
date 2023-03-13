<?php
    declare(strict_types=1);
    function typeH(int $a) {
        var_dump($a); 
    }

    typeH(3);

    echo "<br/>";

    function typeHi(int $a) {
        return $a;
    }

    try{
        var_dump(typeHi(5));
        echo "<br/>";
        var_dump(typeHi(4));
    }catch (TypeError $e) {
        echo $e->getMessage();
    }   

    echo "<br/>";

    function typeHin(array $a) {
        return $a;
    }

    try {
        var_dump(typeHin([2,3,4,"big",34]));
        echo "<br/>";
        var_dump(typeHin([2]));
    }catch (TypeError $e) {
        echo $e->getMessage();
    }

    echo "<br/>";

    class A {
        public $name = "Mahbubul Alam";
        public $email = "mahbub@gmail.com";
        public $phone = 123456789;
    }

    function typeHint(A $a) {
        return $a;
    }

    try {
        var_dump(typeHint(new A));
        echo "<br/>";
        //var_dump(typeHint("hello"));
    }catch (TypeError $e) {
        $e->getMessage();
    }


    function sum($a, $b):int {
        return $a+$b;
    }

    var_dump(2,3);

    echo "<br/>";

    function obj():A {
        return new A;
    }

    function str():string {
        return "\n Hello world";
    }

    try {
        var_dump(obj());
        var_dump(str());
    }catch (TypeError $e) {
        $e->getMessage();
    }

    echo "<br/>";

    function arr(): array {
        return [1,2,3,4];
    }

    function obj2(): A {
        return new A;
    }

    try{
        var_dump(arr());
        var_dump(obj2());
    }catch (TypeError $e) {
        $e->getMessage();
    }



?>