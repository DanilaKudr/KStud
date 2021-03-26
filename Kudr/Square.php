<?php

namespace Kudr;

use core\EquationInterface;

class Square extends Line implements EquationInterface
{
    public function D($a, $b, $c){
        return ($b**2)-4*$a*$c;
    }

    public function solve($a, $b, $c)
    {
        if ($a == 0) {
            return $this->Line($b, $c);
        }
        MyLog::log("This is square equation");
        $d = $this->D($a, $b, $c);

        if ($d == 0) {
           return $this->x = [(-($b / (2 * $a)))];

        }
        if ($d < 0 ){
            throw new KudrException('The equation does not have solution');
        }

        return $this->x = [((-$b) + sqrt($d)) / (2 * $a), ((-$b) - sqrt($d)) / (2 * $a)];
    }
}
