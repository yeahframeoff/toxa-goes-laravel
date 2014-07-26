<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 26.07.14
 * Time: 11:15
 */

class BatteryComponent extends ComponentBase {

    public function __construct()
    {
        $this->_attrs = ['capacity' => 1234];
    }

    public function name()
    {
        return 'Battery';
    }

    public function __toString()
    {
        return $this->_attrs['capacity']. ' mAh';
    }
}