<?php
require_once('abstract.php');
class Chart extends AbstractModel{

	private $_items = null;

	private $_itemsPerPage = 4;

	private $_totalItems;

	function __construct(){
		parent::__construct();
	}

	function loadByName($name){
		if (!empty($name)){
			$sql = "SELECT * FROM chart WHERE title = ?";
			$query = $this->db->query($sql, array($name));
			$result = $query->result_array();
			if (count($result) > 0){
				$this->setData($result[0]);
				return $this;
			}
		}
		return false;
	}

	function getList($page = null){
		if ($this->_items == null){
			if ($id = $this->getData('id')){
				if ($page){
					$offset = ($page - 1) * $this->_itemsPerPage;
				}else{
					$offset = 0;
				}
				$sql = "SELECT * FROM chart_item WHERE chart_id = ? LIMIT ?, ?";
				$query = $this->db->query($sql, array($id, $offset, $this->_itemsPerPage));
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

	function getItemsPerPage(){
		return $this->_itemsPerPage;
	}

	function getTotalPages(){
		if ($id = $this->getData('id')){
			$sql = "SELECT count(*) as count FROM chart_item WHERE chart_id = ?";
			$query = $this->db->query($sql, array($id));
			$collection = $query->result_array();
			$count = $collection[0]['count'];
			$this->_totalItems = $count;
			if (($count % $this->_itemsPerPage) != 0)
			$pages = (int)($count / $this->_itemsPerPage ) + 1;
			else 
			$pages = $count / $this->_itemsPerPage;

			return $pages;
		}else {
			throw new Exception("Chart not initialized");
		}
	}

	function getTotalItemsCount(){
		return $this->_totalItems;
	}

        function getChartHighlights(){
		if ($id = $this->getData('id')){
			$sql = "SELECT a.title as track_title, a.artist as track_artist,a.trend as track_behaviour, a.pos as chart_position, b.name as chart, b.title as chart_link  from chart_item a, chart b where a.chart_id = b.id AND pos = 1 AND chart_id <> ?";
			$query = $this->db->query($sql, array($id));
		}else {
			$sql = "SELECT a.title as track_title,a.trend as track_behaviour, a.artist as track_artist, a.pos as chart_position, b.name as chart, b.title as chart_link  from chart_item a, chart b where a.chart_id = b.id AND pos = 1";
			$query = $this->db->query($sql);
			
		}
		$collection = $query->result_array();
		return $collection;
	}

}
