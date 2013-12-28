<?php
abstract class AbstractModel extends CI_Model{

	protected $_data = array();

	function __construct(){
		parent::__construct();
		$this->load->database('records');
	}

	/*function __set(string $name , mixed $value){
		$this->_data[$name] = $value;
	}

	function __get(string $name){
		if (array_key_exists($name, $this->_data)) {
		    return $this->data[$name];
		}
	}*/

	public function setData($key, $value=null){
		if (is_array($key)){
			foreach ($key as $k => $v){
				$this->_data[$k] = $v;
			}
		}else{
			$this->_data[$key] = $value;
		}
	}

	public function getData($key = null){
		if (($key == null) || ($key == '')){
			return $this->_data;
		}else {
			if (array_key_exists($key, $this->_data)) {
			    return $this->_data[$key];
			}
			return false;
		}
	}
}
?>
