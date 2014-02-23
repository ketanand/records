<?php
require_once(APPPATH . 'models/abstract.php');
class Author extends AbstractModel{

	private $_table = 'author';

	function __construct(){
		parent::__construct();
	}

	public function loadById($id){
		if ($id){
			$query = $this->db->get_where($this->_table, array('author_id' => $id));
			$result = $query->result_array();
			if ($count = count($result)){
				$this->setData($result[0]);
				return $this;
			}
		}
		return false;
	}

}

?>
