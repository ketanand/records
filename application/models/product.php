<?php
class Product extends CI_Model{

	private $groupId;
	private $productId;
	private $title;
	private $category;
	private $subCategory;
	private $price;
	private $shippingDuration;

	function __construct(){
		parent::__construct();
		$this->load->database('movies');
	}

	function getById($id){
		if (!empty($id)){
			$query = $this->db->get_where('movies', array('product_id' => $id));
			$result = $query->result_array();
			if (count($result) > 0){
				return $result[0];
			}
		}
		return false;
	}
	
	function getRelatedProducts($groupId){
		if (!empty($groupId)){
			$query = $this->db->get_where('movies', array('group_id' => $groupId));
			if ($query->num_rows() > 0){
				return $query->result_array();
			}
		}
		return false;
	}

	function search($query){
		$searchTerms = explode(' ', $query);
		$where = "movie_title like '%";
		$count = 0;
		foreach ($searchTerms as $term){
			if ($count > 0){
				$where .= "%" . $term;
			}else{
				$where .= $term;
			}
			$count++;
		}
		$where .= "%'";
		$this->db->where($where);
		$this->db->group_by('group_id');
		$query = $this->db->get('movies');
		
		$result['hit'] = false;
		if ($query->num_rows() > 0){
			$result['hit'] = $query->result_array();
		}
		$count = 0;
		foreach ($searchTerms as $term){
			if ($count){
				$this->db->or_like("movie_title" , mysql_real_escape_string($term));
			}else {
				$this->db->like("movie_title" , mysql_real_escape_string($term));
				$count++;
			}
		}
		$this->db->group_by('group_id');
		$query = $this->db->get('movies');
		$result['partial'] = false;
		if ($query->num_rows() > 0){
			$result['partial'] = $query->result_array();
		}
		return array_merge($result['hit'], $result['partial']);
	}
}
?>
