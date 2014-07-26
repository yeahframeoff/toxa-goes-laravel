<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 26.07.14
 * Time: 10:55
 */

class DisplayComponent extends ComponentBase {

    public function __construct()
    {
        $this->_attrs = [
            'height' => 1280,
            'width' => 720,
            'matrix' => 'IPS'
        ];
    }

    public function componentName()
    {
        return 'Display';
    }

    public function __toString()
    {
        return
            $this->_attrs['height'] . ' x '.
            $this->_attrs['width'] . ' pixels, ' .
            $this->_attrs['matrix'];
    }
}