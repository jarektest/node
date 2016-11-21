<?php
class Controller extends Service
{
	public function __construct($instance = array())
	{
		parent::__construct($instance);
		$this->homepageAction();
	}

	public function homepageAction()
	{
		$instance = [
		    'url'=> 'jarek',
		    'entity'=> $this->run()
		];
		include_once('./pages/homepage.php');
	}
}

new Controller(['jarek', 'anicka', 'petra', 'jarek']);