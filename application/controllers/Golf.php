<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golf extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Alpha Regular Controller
         * Small Changed
	 */
	public function index()
	{
		$this->show(6);
	}

}
