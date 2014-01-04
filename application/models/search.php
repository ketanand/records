<?php
require_once('abstract.php');
class Search extends AbstractModel{

	const KEY = "search";
	const SEARCH_BLOG = false;
	const SEARCH_CHARTS = true;
	const SEARCH_VIDEOS = false;
	const BLOG_TABLE = 'blogs';
	const CHARTS_TABLE = 'chart_item';
	const VIDEOS_TABLE = 'videos';

	function __construct(){
		parent::__construct();
	}

	function getResults($query){
		$searchTerms = explode(' ', $query);
		$data = false;
		if (self::SEARCH_BLOG){
			$data['blog'] = $this->_search($searchTerms, self::BLOG_TABLE, 'title');
		}
		if (self::SEARCH_CHARTS){
			$data['charts'] = $this->_search($searchTerms, self::CHARTS_TABLE, array('title', 'artist', 'album'));
		}
		if (self::SEARCH_VIDEOS){
			$data['videos'] = $this->_search($searchTerms, self::VIDEOS_TABLE, 'title');
		}
		return $data;
	}

	/**
	* Search for specified string in table
	* @param, $table : Table to Search in
	* @param, $searchTerms : terms to search for
	* @param, $fields : array of table columns to search in Or a string in case of single column
	**/
	private function _search($searchTerms, $table, $fields){
		$result['hit'] = $this->_getHitMatches($searchTerms, $table, $fields);
		$result['partial'] = $this->_getPartialMatches($searchTerms, $table, $fields);
		if ($result['hit'] && $result['partial']){
			return array_merge($result['hit'], $result['partial']);
		}else if ($result['hit']){
			return $result['hit'];
		}else if ($result['partial']){
			return $result['partial'];
		}else{
			return false;
		}
	}

	private function _getHitMatches($searchTerms, $table, $fields){
		if (is_array($fields)){
			$firstWhere = true;
			foreach ($fields as $field){
				$where = $field . " like '%";
				$first = true;
				foreach($searchTerms as $term){
					if ($first){
						$where .= $term;
						$first = false;
					}else {
						$where .= "%" . $term;
					}
				} 
				$where .= "%'";
				if ($firstWhere){
					$this->db->where($where);
					$firstWhere = false;
				}else{
					$this->db->or_where($where);
				}
			}
		}else{
			$where = $fields . " like '%";
			$first = true;
			foreach($searchTerms as $term){
				if ($first){
					$where .= $term;
					$first = false;
				}else {
					$where .= "%" . $term;
				}
			} 
			$where .= "%'";
			$this->db->where($where);
		}
		$query = $this->db->get($table);
		if ($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}

	private function _getPartialMatches($searchTerms, $table, $fields){
		if (is_array($fields)){
			$first = true;
			foreach ($fields as $field){
				foreach($searchTerms as $term){
					if ($first){
						$this->db->like($field, $term);
						$first = false;
					}else {
						$this->db->or_like($field, $term);
					}
				} 
			}
		}else{
			$first = true;
			foreach($searchTerms as $term){
				if ($first){
					$this->db->like($fields, $term);
					$first = false;
				}else {
					$this->db->or_like($fields, $term);
				}
			} 
		}
		$query = $this->db->get($table);
		if ($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}

}

?>
