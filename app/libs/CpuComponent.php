<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 26.07.14
 * Time: 11:07
 */

class CpuComponent extends ComponentBase {

    public function __construct()
    {
        $this->_attrs = [
            'vendor' => 'Qualcomm',
            'model' => '5555',
            'cores' => 4,
            'frequency' => 1
        ];
    }

    public function componentName()
    {
        return 'Processor';
    }

    public function __toString()
    {
        return
            $this->_attrs['vendor'] .' '.
            $this->_attrs['model']  .' '.
            $this->coreString()       .' '.
            $this->_attrs['frequency'].'GHz';
    }

    private function coreString()
    {
        $core = $this->_attrs['cores'];
        if (!is_integer($core))
            return '';
        switch ($core) {
            case 1:
                return 'Single-Core';
            case 2:
                return 'Dual-Core';
            case 4:
                return 'Quad-Core';
            case 8:
                return 'Octa-Core';
            default:
                return "$core-Core";
        }
    }
}