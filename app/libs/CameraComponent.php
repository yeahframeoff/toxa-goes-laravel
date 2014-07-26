<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 26.07.14
 * Time: 11:20
 */

class CameraComponent extends ComponentBase {

    public function __construct()
    {
        $this->_attrs = [
            'mpixels' => 8,
            'optics' => 'Carl Zeiss'
        ];
    }

    public function name()
    {
        return 'Camera';
    }

    public function __toString()
    {
        return
            $this->_attrs['mpixels'] . ' Megapixels '.
            $this->_attrs['optics'];
    }
}