<?php

namespace Tymoshchuk\WeblabLib\creditinterest;

interface interfacepercent {
    /**
     * @param $summcredit
     * @param $rateperiod
     * @param $numberperiods
     */
    public function indebtedness ($summcredit, $rateperiod, $numberperiods);
}

