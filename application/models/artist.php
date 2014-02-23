<?php
require_once(APPPATH . 'models/abstract.php');
class Artist extends AbstractModel{

	private $_table = 'artist';

	private $_albums = null;

	function __construct(){
		parent::__construct();
	}

	public function loadById($id){
		if ($id){
			$query = $this->db->get_where($this->_table, array('id' => $id));
			$result = $query->result_array();
			if ($count = count($result)){
				$this->setData($result[0]);
				return $this;
			}
		}
		return false;
	}

	public function getAlbums(){
		if ($this->_albums == null){
			$CI =& get_instance();
			$CI->load->model('album');
			$albums = $CI->album->loadAlbumsByArtist($this->getData('id'));
			$this->_albums = $albums;
		}
		return $this->_albums;
	}

}

?>
