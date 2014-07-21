<?

class Phone
{
	private $_attrs;

	private static $requiredKeys =
	[
	    'name'    => ['vendor', 'model'],
	    'cpu'     => ['vendor', 'model', 'cores', 'frequency'],
	    'display' => ['height', 'width', 'matrix'],
	    'camera'  => ['mpixels', 'optics'],
	    'battery' => ['capacity'],
	];

	private static function standardConfig()
	{
		return [
		    'name' => ['vendor' => 'Sony', 'model' => 'Xperia Z2'],
		    'cpu' => ['vendor' => 'Qualcomm', 'model' => '5555', 'cores' => 4, 'frequency' => 1],
		    'display' => ['height' => 1280, 'width' => 720, 'matrix' => 'IPS'],
		    'camera' => ['mpixels' => 8, 'optics' => 'Carl Zeiss'],
		    'battery' => ['capacity' => 1234],
		];
	}

	public function __set($name, $value)
	{
		$this->_attrs[$name] = $value;
	}

	public function __get($name)
	{
		return isset($this->_attrs[$name]) ? $this->_attrs[$name] : null;
	}

	public function __construct($attrs = null)
	{
		if (isset($attrs) && is_array($attrs))
			$this->setAttrs($attrs);
		else
			$this->_attrs = $this->processAttrs( self::standardConfig() );
	}

	public function setAttrs(array $attrs)
	{
		$this->_attrs = $this->processAttrs($attrs);	
	}

	private function processAttrs($attrs, $required = null)
	{
		if ($required === null)
			$required = self::$requiredKeys;
		$res = [];
		foreach ($required as $key => $value) {
			if (is_array($value))
				if ( isset($attrs[$key]) )
					$res[$key] = $this->processAttrs($attrs[$key], $value);
				else
				{
					$empt = array_flip($value);
					array_walk($empt, function(&$v) {$v = '';});
					$res[$key] = $empt;
				}
			            
			else
				$res[$value] = isset($attrs[$value]) ? $attrs[$value] : '';
		}
		return $res;
	}

	public static function coreToString($core)
	{
		if (!is_integer($core))
			return '';
		switch ($core) {
			case 1:
				return 'Single-Core';
				break;
			case 2:
				return 'Dual-Core';
				break;
			case 4:
				return 'Quad-Core';
				break;
			case 8:
				return 'Octa-Core';
				break;
			default:
				return "$core-Core";
				break;
		}
	}

	public function cores()
	{
		return self::coreToString($this->cpu['cores']);
	}
}