<?php

namespace Tymoshchuk\WeblabLib\creditinterest;

use Tymoshchuk\WeblabLib\excepcions\custexcept;

class simpleinterest implements interfacepercent
{
    public function indebtedness($summcredit, $rateperiod, $numberperiods)
    {
        if (gettype($summcredit) === 'string' || gettype($rateperiod)  === 'string' || gettype($numberperiods) === 'string'){
            throw new custexcept('Введите число');
        }elseif ($summcredit <=0 || $rateperiod <= 0 || $numberperiods <= 0){
            throw new custexcept("Недействительное число");
        }
        return $summcredit *(1+($rateperiod/100)*$numberperiods);
    }
}