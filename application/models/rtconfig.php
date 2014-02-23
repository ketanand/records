<?php
require_once(APPPATH . 'models/abstract.php');
class Rtconfig extends AbstractModel{

	private $_table = 'config';


	function __construct(){
		parent::__construct();
	}

	public function get($key){
		if ($key){
			$query = $this->db->get_where($this->_table, array('key' => $key));
			$result = $query->result_array();
			if ($count = count($result)){
				return $result[0]['value'];
			}
		}
		return false;
	}


}

?>
