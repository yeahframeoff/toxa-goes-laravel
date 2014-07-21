<?php

abstract class PhoneViewProvider
{
	public function make($arg)
	{
		if ($arg instanceof Phone)
		{
			$viewFile = $this->viewFile();
			return View::make($viewFile, ['phone' => $arg]);
		}
		else
		{
			if (!is_integer($arg)) $arg = 0;
			$attrs = self::$someConfigs[$arg % count(self::$someConfigs)];
			$phone = new Phone($attrs);
			return $this->make($phone);
		}
	}

    protected abstract function viewFile();

    //
    // really bad solution, but what do I do if I didn't manage to 
    // serve using my OpenServer and to get all the advantages
    // of site with database...
    //
    private static $someConfigs = 
    [
        0 => 
        [
            'name' => ['vendor' => 'Sony', 'model' => 'Xperia Z2'],
            'cpu' => ['vendor' => 'Qualcomm', 'model' => '5555', 'cores' => 4, 'frequency' => 1],
            'display' => ['height' => 1280, 'width' => 720, 'matrix' => 'IPS'],
            'camera' => ['mpixels' => 8, 'optics' => 'Carl Zeiss'],
            'battery' => ['capacity' => 1234],
        ],
        1 => 
	    [
		    'name' => ['vendor' => 'Sony', 'model' => 'Xperia Z2'],
		    'cpu' => ['vendor' => 'Qualcomm', 'model' => '5555', 'cores' => 4, 'frequency' => 1],
		    'display' => ['height' => 1280, 'width' => 720, 'matrix' => 'IPS'],
		    'camera' => ['mpixels' => 8, 'optics' => 'Carl Zeiss'],
		    'battery' => ['capacity' => 1234],
		],
		2 => 
	    [
		    'name' => ['vendor' => 'Sony', 'model' => 'Xperia Z2'],
		    'cpu' => ['vendor' => 'Qualcomm', 'model' => '5555', 'cores' => 4, 'frequency' => 1],
		    'display' => ['height' => 1280, 'width' => 720, 'matrix' => 'IPS'],
		    'camera' => ['mpixels' => 8, 'optics' => 'Carl Zeiss'],
		    'battery' => ['capacity' => 1234],
		],
		3 => 
	    [
		    'name' => ['vendor' => 'Sony', 'model' => 'Xperia Z2'],
		    'cpu' => ['vendor' => 'Qualcomm', 'model' => '5555', 'cores' => 4, 'frequency' => 1],
		    'display' => ['height' => 1280, 'width' => 720, 'matrix' => 'IPS'],
		    'camera' => ['mpixels' => 8, 'optics' => 'Carl Zeiss'],
		    'battery' => ['capacity' => 1234],
		],
		4 => 
	    [
		    'name' => ['vendor' => 'Sony', 'model' => 'Xperia Z2'],
		    'cpu' => ['vendor' => 'Qualcomm', 'model' => '5555', 'cores' => 4, 'frequency' => 1],
		    'display' => ['height' => 1280, 'width' => 720, 'matrix' => 'IPS'],
		    'camera' => ['mpixels' => 8, 'optics' => 'Carl Zeiss'],
		    'battery' => ['capacity' => 1234],
		],
		5 => 
	    [
		    'name' => ['vendor' => 'Sony', 'model' => 'Xperia Z2'],
		    'cpu' => ['vendor' => 'Qualcomm', 'model' => '5555', 'cores' => 4, 'frequency' => 1],
		    'display' => ['height' => 1280, 'width' => 720, 'matrix' => 'IPS'],
		    'camera' => ['mpixels' => 8, 'optics' => 'Carl Zeiss'],
		    'battery' => ['capacity' => 1234],
		],
	];
}