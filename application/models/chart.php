<?php
class Chart extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database('records');
	}

	function loadById(){

	}

}
