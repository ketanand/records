<?php
abstract class AbstactController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database('records');
		$this->load->library('session');
	}
}
?>
