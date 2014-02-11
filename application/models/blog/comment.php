<?php
require_once(APPPATH . 'models/abstract.php');
class Comment extends AbstractModel{

	private $_table = 'blog_comment';

	private $_moderated = 0; //0 - false , 1 - true

	public function save(){
		$this->setData('id', NULL);
		$this->setData('approved', !$this->_moderated);
		$result = $this->db->insert($this->_table, $this->getData());
		if (!$result){
			$result['error_message'] = $this->db->_error_message();
			$result['error_number'] = $this->db->_error_number();
			return $result;
		}else {
			$id = $this->db->insert_id();
			$this->setData('id', $id);
			return true;
		}
	}

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
