<?php

/*
	Session manager
*/
class Session extends Chernozem\Container {

	/*
		Constructor

		Parameters
			string $namespace
	*/
	public function __construct($namespace = '') {
		if(isset($_SESSION)) {
			session_start();
		}
		
		if(!isset($_SESSION[$namespace])){
			$_SESSION[$namespace] = [];
		}
		
		$this->values = &$_SESSION[$namespace];
		
		parent::__construct();
	}

}
