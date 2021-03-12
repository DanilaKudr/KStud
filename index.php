<?php

use Kudr\A;
use Kudr\B;

include 'Kudr/A.php';
include 'Kudr/B.php';

$obj = new A ();
$obj2 = new B ();
$res = $obj2->roots(1, 5, 0);

echo($obj->func(6, 3) . PHP_EOL);
foreach ($res as $el) {
    echo $el;
}
