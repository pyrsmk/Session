<?php

use Chernozem;

/*
	Session manager
*/
class Session extends Chernozem{

	/*
		Constructor

		Parameters
			string $namespace
	*/
	public function __construct($namespace=''){
		// Init session
		if($_SESSION===null){
			session_start();
		}
		// Init values
		$this->__chernozem_values=&$_SESSION[$namespace];
		if($this->__chernozem_values===null){
			$this->__chernozem_values=array();
		}
		parent::__construct();
	}

}
