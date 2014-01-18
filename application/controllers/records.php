<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'controllers/abstract.php');
class Records extends AbstactController {

	public function index()
	{
		$data = array(
   				'title' => 'RecordsTree.com'
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
		$this->template->load('default', 'homepage', $data);
	}

	
        public function charts($name, $page = null){
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$this->load->model('chart');
		$chart = $this->chart->loadByName($name);
		if ($chart){
			$totalPages = $chart->getTotalPages();
			$data['totalPages'] = $totalPages;
			$data['totalItems'] = $chart->getTotalItemsCount();
			$itemsPerPage = $chart->getItemsPerPage();
			$data['nextPage'] = false;
			$data['prevPage'] = false;
			if (($page == null) || ($page < 2)){
				$data['curPage'] = 1;
				$data['curPageRange'] = '1-' . $itemsPerPage;
				$page = 1;
				if ($totalPages > 1){
					$data['nextPage'] = 2;
					$start = (($data['nextPage'] - 1) * $itemsPerPage) + 1;
					$end = ($start - 1) + $itemsPerPage;
					$data['nextPageRange'] = $start . '-' .  $end;
				}
			}else if ($page >= $totalPages){
				$page = $totalPages;
				$data['curPage'] = $totalPages;
				$data['prevPage'] = $totalPages - 1;
				//calculating current page range
				$start = (($data['curPage'] - 1) * $itemsPerPage) + 1;
				$end = $data['totalItems'];
				$data['curPageRange'] = $start . '-' .  $end;
				//calculating previous page range
				$start = (($data['prevPage'] - 1) * $itemsPerPage) + 1;
				$end = ($start - 1) + $itemsPerPage;
				$data['prevPageRange'] = $start . '-' .  $end;
			}else {
				$data['curPage'] = $page;
				$data['nextPage'] = $page + 1;
				$data['prevPage'] = $page - 1;
				//calculating current page range
				$start = (($data['curPage'] - 1) * $itemsPerPage) + 1;
				$end = ($start - 1) + $itemsPerPage;
				$data['curPageRange'] = $start . '-' .  $end;
				//calculating next page range
				$start = (($data['nextPage'] - 1) * $itemsPerPage) + 1;
				$end = ($start - 1) + $itemsPerPage;
				$data['nextPageRange'] = $start . '-' .  $end;
				//calculating prev page range
				$start = (($data['prevPage'] - 1) * $itemsPerPage) + 1;
				$end = ($start - 1) + $itemsPerPage;
				$data['prevPageRange'] = $start . '-' .  $end;
			}
			$data['chartName'] = $name;
			$chartItems = $chart->getList($page);
			$data['title'] = $this->chart->getData('title');
			$data['items'] = $chartItems;
			$data['highlights'] = $chart->getChartHighlights();
			$this->template->load('charts', 'list', $data, 'sidebar');
		}else {
			show_404();
		}
	}
	
	public function video(){
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$data['highlights'] = array(
					'0' => array(
							'chart' => 'Bollywood',
							'chart_link' => '/bollywood',
							'chart_position' => '12',
							'track_behaviour' => 'loss',
							'track_title' => 'Tum Hi Ho',
							'track_artist' => 'Arijit Singh'
						    ),		
					'1' => array(
							'chart' => 'Fusion',
							'chart_link' => '/fusion',
							'chart_position' => '3',
							'track_behaviour' => 'gain',
							'track_title' => 'Jhankaar',
							'track_artist' => 'Foonkh'
						    ),	
					'2' => array(
							'chart' => 'Punjabi',
							'chart_link' => '/punjabi',
							'chart_position' => '1',
							'track_behaviour' => 'same',
							'track_title' => 'Blue Eyes',
							'track_artist' => 'Honey Singh'
						    ),	
				);
		//$this->load->model('chart');
		//$chart = $this->chart->loadByName($name);
		if (1){//$chart){
			//$chartItems = $chart->getList();
			//$data['title'] = $this->chart->getData('title');
			//$data['items'] = $chartItems;
			$this->template->load('video', 'video', $data, 'sidebar','video_banner');
		}else {
			show_404();
		}
	}
	
	
	


        public function videos(){

	}

	public function search($query){
		if (!empty($query)){
			$this->load->model('search');
			$data['results'] = $this->search->getResults(urlDecode($query));
		}else {
			echo "please enter a search term";
			return;
		}
		$this->template->load('charts', 'search_results', $data, 'sidebar');
	}
	
}

