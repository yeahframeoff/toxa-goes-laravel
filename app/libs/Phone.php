<?

/*
 * @property $components ComponentBase[]
 * */

class Phone
{
	private $_components;

	public function __set($name, $value)
	{
		$this->_components[$name] = $value;
	}

	public function __get($name)
    {
        return method_exists(__CLASS__, $name) ?
            $this->$name() :
            (isset($this->_components[$name]) ?
                $this->_components[$name] :
                '');
    }

    public function name() {return 'Xperia Z'; }
    public function vendor() {return 'Sony'; }

    public function components() {return $this->_components; }

	public function __construct($components)
	{
		$this->_components = $components;
	}

	public function setComponents(array $components)
	{
		$this->_components = $components;
	}
}