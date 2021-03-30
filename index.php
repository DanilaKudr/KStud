<?php
use Kudr\{Square, MyLog};
include 'core\EquationInterface.php';
include 'core\LogAbstract.php';
include 'core\LogInterface.php';
include 'Kudr\MyLog.php';
include 'Kudr\Line.php';
include 'Kudr\Square.php';
include 'Kudr\KudrException.php';

MyLog::log("Program version: " . trim(file_get_contents("version")));

try {
    echo "Enter 3 parameters: " . PHP_EOL;
    $a = readline();
    $b = readline();
    $c = readline();

    $sqr = new Square();
    MyLog::log("The equation is: ". $a.'x^2 + '.$b.'x + '.$c.' = 0'. PHP_EOL);

    $res = $sqr->solve($a, $b, $c);

} catch (RuntimeException $e){
    MyLog::log("Error".$e->getMessage());
}
MyLog::write();