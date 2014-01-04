<?php
require_once('abstract.php');
class News extends AbstractModel{

	private $_itemsPerPage = 10;

	function __construct(){
		parent::__construct();
	}

	function load($id){
		if (!empty($id)){
			$sql = "SELECT * FROM news WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			$result = $query->result_array();
			if (count($result) > 0){
				$this->setData($result[0]);
				return $this;
			}
		}
		return false;
	}


	function getList($page = null){
		if ($page){
			$offset = ($page - 1) * $this->_itemsPerPage;
		}else{
			$offset = 0;
		}
		$sql = "SELECT title, main_img, short_description, created_at FROM news LIMIT ?, ?;";
		$query = $this->db->query($sql,array($offset, $this->_itemsPerPage));
		$collection = $query->result_array();
		if (count($collection) > 0){
			return $collection;
		}else {
			return false;
		}
	}

	function getTotalPages(){
		$sql = "SELECT count(*) as count FROM news";
		$query = $this->db->query($sql);
		$collection = $query->result_array();
		$count = $collection[0]['count'];
		$pages = (int)($count / $this->_itemsPerPage ) + 1;
		return $pages;
	}

}
