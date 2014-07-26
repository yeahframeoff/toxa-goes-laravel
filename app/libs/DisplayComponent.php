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
            'height' => 1920,
            'width' => 1280,
            'matrix' => 'IPS'
        ];
    }

    public function name()
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