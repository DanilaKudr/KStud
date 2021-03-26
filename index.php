<?php

use Kudr\{Square, MyLog, KudrException};

include 'core/EquationInterface.php';
include 'core/LogAbstract.php';
include 'core/LogInterface.php';
include 'Kudr/Line.php';
include 'Kudr/Square.php';
include 'Kudr/MyLog.php';
include 'Kudr/KudrException.php';

$sqr = new Square();

try {
    $a = readline();
    $b = readline();
    $c = readline();

    MyLog::log("The equation is: ". $a.'x^2 + '.$b.'x + '.$c.' = 0'. PHP_EOL);

    $res = $sqr->solve($a, $b, $c);

    $str = implode(";", $res);
    MyLog::log("; ", $res);

} catch (KudrException $e){
   MyLog::log("Error ".$e->getMessage());
}

MyLog::write();
