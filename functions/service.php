<?php
class Service
{
	public function __construct($instance = array())
	{
		if(empty($instance)){
			$this->instance = ['music'];
		}
		else{
			$this->instance = $instance;
		}
	}

	public function run()
	{
		return $this->instance;
	}
}