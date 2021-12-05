<?php

namespace Tymoshchuk\WeblabLib\excepcions;

class custexcept extends \Exception
{
    protected string $details = 'Too few arguments provided!';

    public function __construct($details) {
        $this->details = $details;
        parent::__construct();
    }

    public function __toString() {
        return $this->details;
    }

}