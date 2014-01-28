<?php
require_once(APPPATH . 'models/abstract.php');
class User extends AbstractModel{

	private $_table = 'user';

	public function load($email){
		if ($email){
			$query = $this->db->get_where($this->_table, array('email' => $email));
			$result = $query->result_array();
			if ($count = count($result)){
				$this->setData($result[0]);
				return $this;
			}else{
				return false;
			}
		}
		return false;
	}

	public function save(){
		$this->setData('id', NULL);
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

}
