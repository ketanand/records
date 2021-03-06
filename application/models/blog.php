<?php
require_once(APPPATH . 'models/abstract.php');
class Blog extends AbstractModel{

	private $_comments = null;

	private $_itemsPerPage = 10;

	function __construct(){
		parent::__construct();
	}

	function load($id){
		if (!empty($id)){
			$sql = "SELECT * FROM blogs WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			$result = $query->result_array();
			if (count($result) > 0){
				$this->setData($result[0]);
				return $this;
			}
		}
		return false;
	}

	function getAuthorName(){
		$CI =& get_instance();
		$CI->load->model('author');
		$author = $CI->author->loadById($this->getData('author_id'));
		return $author['author_name'];
	}

	function getComments(){
		if ($this->_comments == null){
			if ($id = $this->getData('id')){
				$sql = "SELECT * FROM blog_comment WHERE id = ? AND approved = 1";
				$query = $this->db->query($sql, array($id));
				$collection = $query->result_array();
				if (count($collection) > 0){
					$this->_comments = $collection;
				}
			}else {
				throw new Exception("Blog not initialized");
			}
		}
		return $this->_comments;
	}

	function getList($page = null){
		if ($page){
			$offset = ($page - 1) * $this->_itemsPerPage;
		}else{
			$offset = 0;
		}
		$sql = "SELECT title,main_img,short_description, author, created_at FROM blogs LIMIT ?, ?;";
		$query = $this->db->query($sql,array($offset, $this->_itemsPerPage));
		$collection = $query->result_array();
		if (count($collection) > 0){
			return $collection;
		}else {
			return false;
		}
	}

	function getTotalPages(){
		$sql = "SELECT count(*) as count FROM blogs";
		$query = $this->db->query($sql);
		$collection = $query->result_array();
		$count = $collection[0]['count'];
		$pages = (int)($count / $this->_itemsPerPage ) + 1;
		return $pages;
	}

}
