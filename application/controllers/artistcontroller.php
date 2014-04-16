<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'controllers/abstract.php');
class ArtistController extends AbstactController {

	const GIGS_TABLE = 'gigs';
	const GIGS_REQUEST_TABLE = 'gig_request';
	const ARTIST_REQUEST = 'artist_request';

	//Function to display artist of the week
	public function artistoftheweek(){
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$data['page']['featured_videos'] = array(
					'0' => array(
							'id' => 'qSMdro7dFKM',
							'link' => 'http://www.youtube.com/watch?v=qSMdro7dFKM'
						    ),		
					'1' => array(
							'id' => 'qcguxHc4hiU',
							'link' => 'http://www.youtube.com/watch?v=qcguxHc4hiU'
						    ),	
					'2' => array(
							'id' => 'DXa48TgRYiE',
							'link' => 'http://www.youtube.com/watch?v=DXa48TgRYiE'
						    ),	
					'3' => array(
							'id' => 'e4Kk4XJ_dYY',
							'link' => 'http://www.youtube.com/watch?v=e4Kk4XJ_dYY'
						    ),	
					'4' => array(
							'id' => 'uwYbJCc_AC8',
							'link' => 'http://www.youtube.com/watch?v=uwYbJCc_AC8'
						    ),
					'5' => array(
							'id' => 'e4Kk4XJ_dYY',
							'link' => 'http://www.youtube.com/watch?v=e4Kk4XJ_dYY'
						    ),	
					'6' => array(
							'id' => 'uwYbJCc_AC8',
							'link' => 'http://www.youtube.com/watch?v=uwYbJCc_AC8'
						    ),
					'7' => array(
							'id' => 'uwYbJCc_AC8',
							'link' => 'http://www.youtube.com/watch?v=uwYbJCc_AC8'
						    )		
				);
		$this->load->model('rtconfig');
		$artistId = $this->rtconfig->get('aotw');
		$this->load->model('artist');
		$artist = $this->artist->loadById($artistId);
		if ($artist){
			$data['artist'] = $artist->getData();
			$data['albums'] = $artist->getAlbums();
			$albums = $artist->getAlbums();
			$data['tracks'] = $albums[0]->getSongs();
			$this->load->model('chart');
			$data['highlights'] = $this->_getChartHighlights();
			$this->template->load('aotw_new', 'aotw_new', $data, 'sidebar_new','aotw_banner_new');		
		}else {
			show_404();
		}
	}

        protected function _getChartHighlights(){
		$this->load->model('chart');
		return $this->chart->getChartHighlights();
	}
	

	public function getGigs(){

	}

	public function gigRequest(){

	}

	public function artistRequest(){

	}

}
?>
