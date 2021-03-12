<?php

namespace Kudr;

class A
{
protected $x;


    public function func($a,$b)
    {
        if ($a == 0){
            return 'Корней нет';
        }
        return $this->x = -$b / $a;
    }
}