<?php
class Service
{
	public function __construct($instance = array())
	{
		$this->instance = $instance;
		$this->run();
	}

	public function run()
	{
		echo'<pre>';
		print_r($this->instance);
		echo'</pre>';
	}
}

new Service(['jarek', 'anicka', 'petra']);