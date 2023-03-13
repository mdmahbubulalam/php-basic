<?php
    function sayHello() {
        echo "Hello World";
    }
    sayHello();

    echo "<br/>";

    function getSum($num1, $num2){
        $sum = $num1 + $num2;
        echo "the sum of $num1 and $num2 is : $sum";
    }
    getSum(10,20);

    echo "<br/>";

    function getSum2(...$nums){
        $sum = $nums[0] + $nums[1];
        echo "The sum of ".$nums[0]. " and ".$nums[1]. " is : $sum";
    }

    getSum2(133, 367);

    echo "<br/>";

    function getSum3(){
        $nums = func_get_args();
        $sum = $nums[0] + $nums[1];
        echo "The sum of ".$nums[0]." and ".$nums[1]." is :$sum";
    }

    getSum3(2,3);

    echo "<br/>";

    function getSum4() {
        $num1 = func_get_arg(0);
        $num2 = func_get_arg(1);
        $num3 = func_get_arg(2);

        $sum = $num1 + $num2 +$num3;

        echo "The sum of ".$num1.", ".$num2." and ".$num3, " is : $sum";
    }

    getSum4(23,25,34);

    echo "<br/>";

    function getSum5($num1, $num2) {
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is : $sum";
    }

    $nums = [12, 13];
    getSum5(...$nums);

    echo "<br/>";

    function par(){
        $nums = func_num_args();
        echo "total args are : $nums";
    }

    par(1,2,3,4,10);

    echo "<br/>";

    function foo(){
        function bar(){
            echo "I don't exits until foo() is called";
        }
    }

    foo();
    bar();

    echo "<br/>";

    $makeFoo1 = false;

    bar2();

    if ($makeFoo1){
        function foo2() {
            echo "I don't exist if program execution reaches me";
        }
    }

    echo "<br/>";

    if ($makeFoo1) foo2 ();
        function bar2() {
            echo "I exist immediately upon program start";
        }

    function recursion ($a) {
        if ($a <= 10) {
            echo "$a\n";
            recursion($a+1);
        }
    }

    recursion(5);

    echo "<br/>";

    function calcFactorial($num) {
        static $product = 1;
        if ($num>1) {
            $product = $product * $num;
            echo "$product, ";
            $num--;
            calcFactorial($num);
        }
        return $product;
    }

    echo calcFactorial(5);
    
?>