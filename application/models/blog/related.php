<?php
require_once(APPPATH . 'models/abstract.php');
class Related extends AbstractModel{

	private $_table = 'blog_related';

	public function loadByBlogId($id){
		if ($id){
			$query = $this->db->get_where($this->_table, array('blog_id' => $id));
			$result = $query->result_array();
			if ($count = count($result)){
				$result['count'] = $count;
				return $result;
			}else{
				return false;
			}
		}
		return false;
	}

}
