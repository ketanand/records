<?php
require_once(APPPATH . 'models/abstract.php');
class Author extends AbstractModel{

	private $_table = 'author';

	public function loadById($id){
		if ($id){
			$query = $this->db->get_where($this->_table, array('author_id' => $id));
			$result = $query->result_array();
			if ($count = count($result)){
				return $result[0];
			}else{
				return false;
			}
		}
		return false;
	}

}
