<?php
require_once(APPPATH . 'models/abstract.php');
class Album extends AbstractModel{

	private $_table = 'album';
	private $_songsTable = 'songs';

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

	public function loadAlbumsByArtist($artist_id){
		if ($artist_id){
				$sql = "SELECT * FROM album WHERE artist_id = ?";
				$query = $this->db->query($sql, array($artist_id));
				$collection = $query->result_array();
				if (count($collection) > 0){
					foreach($collection as $albumData){
						$album = new Album();
						$album->setData($albumData);
						$albums[] = $album;
					}
					return $albums;
				}
		}else {
			throw new Exception("Artist not initialized");
		}
		return false;
	}

	public function getSongs(){
		$query = $this->db->get_where($this->_songsTable, array('artist_id' => $this->getData('id')));
		$result = $query->result_array();
		if ($count = count($result)){
			return $result;
		}
		return false;
	}

}

?>
