<?php
require_once('abstract.php');
class Chart extends AbstractModel{

	private $_items = null;

	function __construct(){
		parent::__construct();
	}

	function loadByName($name){
		if (!empty($name)){
			$sql = "SELECT * from chart WHERE title = ?";
			$query = $this->db->query($sql, array($name));
			$result = $query->result_array();
			if (count($result) > 0){
				$this->setData($result[0]);
				return $this;
			}
		}
		return false;
	}

	function getList(){
		if ($this->_items == null){
			if ($id = $this->getData('id')){
				$sql = "SELECT * FROM chart_item WHERE chart_id = ?";
				$query = $this->db->query($sql, array($id));
				$collection = $query->result_array();
				if (count($collection) > 0){
					$this->_items = $collection;
				}
			}else {
				throw new Exception("Chart not initialized");
			}
		}
		return $this->_items;
	}

}
