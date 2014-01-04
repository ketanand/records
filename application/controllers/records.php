<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Records extends CI_Controller {

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
			$data['nextPage'] = false;
			$data['prevPage'] = false;
			if (($page == null) || ($page < 2)){
				$data['curPage'] = 1;
				$page = 1;
				if ($totalPages > 1){
					$data['nextPage'] = 2;
				}
			}else if ($page >= $totalPages){
				$page = $totalPages;
				$data['curPage'] = $totalPages;
				$data['prevPage'] = $totalPages - 1;
			}else {
				$data['curPage'] = $page;
				$data['nextPage'] = $page + 1;
				$data['prevPage'] = $page - 1;
			}
			$chartItems = $chart->getList($page);
			$data['title'] = $this->chart->getData('title');
			$data['items'] = $chartItems;
			$data['highlights'] = $chart->getChartHighlights();
			$this->template->load('charts', 'list', $data, 'sidebar');
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

