<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our Bravo
	 */
	public function index() {
            $this->show(2);
        }

}
