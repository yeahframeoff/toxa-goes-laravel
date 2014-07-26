<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 26.07.14
 * Time: 10:49
 */

abstract class ComponentBase
{
    protected $_attrs = [];
    abstract public function name();
    abstract public function __toString();
}