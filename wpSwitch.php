<?php
	
	/**
	* @package wpSwitch
	* @version 1.6
	*/
	/*
	
	Plugin Name: wpSwitch
	Plugin URI: 
	Description: wpSwitch
	Author: Georges Jentgen
	Version: 1.0
	Author URI: http://polysign.lu

	*/
	
	class wpSwitch {
	
		private $arrItems;
		private $intItem;
		
		public function __construct($_arrItems) {
			session_start();

			$this->arrItems = $_arrItems;
			$this->intItem = 0;
		}
		
		public function go() {
			if ($this->intItem == count($this->arrItems) - 1) {
				$this->intItem = 0;
			} else {
				$this->intItem++;
			}
			
			return $this->arrItems[$this->intItem];
		}
	}