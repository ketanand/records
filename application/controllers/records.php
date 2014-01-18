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
	
	
	public function blogs(){
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
		$data['blogs'] = array(
					'0' => array(
							'id' => '44',
							'title' => 'music is my life',
							'main_image' => '/public/images/2a.jpeg',
							'short_description' => 'Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo',
							'img1' => 'Tum Hi Ho',
							'img2' => 'Arijit Singh',
							'img3' => 'Arijit Singh',
							'author' => 'RT',
							'created_at' => '2014-01-02'
						    ),		
					'1' => array(
							'id' => '44',
							'title' => 'love for music : inspiration',
							'main_image' => '/public/images/2a.jpeg',
							'short_description' => 'Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo',
							'img1' => 'Tum Hi Ho',
							'img2' => 'Arijit Singh',
							'img3' => 'Arijit Singh',
							'author' => 'RT',
							'created_at' => '2014-01-02'
						    ),	
					'2' => array(
							'id' => '44',
							'title' => 'Let it go : A story of an artist',
							'main_image' => '/public/images/2a.jpeg',
							'short_description' => 'Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo',
							'img1' => 'Tum Hi Ho',
							'img2' => 'Arijit Singh',
							'img3' => 'Arijit Singh',
							'author' => 'RT',
							'created_at' => '2014-01-02'
						    ),	
				);
		//$this->load->model('chart');
		//$chart = $this->chart->loadByName($name);
		if (1){//$chart){
			//$chartItems = $chart->getList();
			//$data['title'] = $this->chart->getData('title');
			//$data['items'] = $chartItems;
			$this->template->load('video', 'blogs', $data, 'sidebar');
		}else {
			show_404();
		}
	}
	
	public function news(){
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
		$data['news'] = array(
					'0' => array(
							'id' => '44',
							'title' => 'music is my life',
							'main_image' => '/public/images/2a.jpeg',
							'short_description' => 'Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo',
							'img1' => 'Tum Hi Ho',
							'img2' => 'Arijit Singh',
							'img3' => 'Arijit Singh',
							'author' => 'RT',
							'created_at' => '2014-01-02'
						    ),		
					'1' => array(
							'id' => '44',
							'title' => 'love for music : inspiration',
							'main_image' => '/public/images/2a.jpeg',
							'short_description' => 'Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo',
							'img1' => 'Tum Hi Ho',
							'img2' => 'Arijit Singh',
							'img3' => 'Arijit Singh',
							'author' => 'RT',
							'created_at' => '2014-01-02'
						    ),	
					'2' => array(
							'id' => '44',
							'title' => 'Let it go : A story of an artist',
							'main_image' => '/public/images/2a.jpeg',
							'short_description' => 'Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo',
							'img1' => 'Tum Hi Ho',
							'img2' => 'Arijit Singh',
							'img3' => 'Arijit Singh',
							'author' => 'RT',
							'created_at' => '2014-01-02'
						    ),	
				);
		//$this->load->model('chart');
		//$chart = $this->chart->loadByName($name);
		if (1){//$chart){
			//$chartItems = $chart->getList();
			//$data['title'] = $this->chart->getData('title');
			//$data['items'] = $chartItems;
			$this->template->load('video', 'news', $data, 'sidebar');
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
	
	public function blogs_view()
	{
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
		$data['blogs'] = array(
							'id' => '44',
							'title' => 'love for music : inspiration',
							'main_image' => '/public/images/2a.jpeg',
							'short_description' => 'Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo',
							'img1' => 'Tum Hi Ho',
							'img2' => 'Arijit Singh',
							'img3' => 'Arijit Singh',
							'author' => 'RT',
							'created_at' => '2014-01-02',
							'number_of_comments'=> '02',	
							'comments' => array(
										'0'=> array(
												'id' => '2123',
												'comment_author' => 'Saurabh Asthana',
												'text' => 'Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo. Seriously thats what you wrote.',
												'comment_author_screen_name' => 'kickass',
												'comment_parent_author' => 'Ketan Anand',
												'created_at' => '2014-01-04 07:44:33'
											),
										'1'=> array(
												'id' => '2125',
												'comment_author' => 'Rohit Shampy',
												'text' => 'Main sharaabi main sharaaabi. Babbo Babbo Babbo. Kya babbo babbo babbo',
												'comment_author_screen_name' => 'hallekaladka',
												'comment_parent_author' => 'Ketan Anand',
												'created_at' => '2014-01-09 17:44:33'
											)
									),			
							'related' => array(
										'0'=> array(
												'link' => 'http://www.fastcoexist.com/3023405/visualized/a-stunning-visualization-of-every-popular-protest-since-1979',
												'img_src' => 'http://images.outbrain.com/imageserver/v2/s/BAWl/n/lcJaT/abc/eGwRH/lcJaT-Zw2-138x138.jpg',
												'src' => 'From Web',
												'title' => 'A Stunning Visualization Of Every Popular Protest Since 1979'
											    ),
										'1'=> array(
												'link' => 'http://www.fastcoexist.com/3023405/visualized/a-stunning-visualization-of-every-popular-protest-since-1979',
												'img_src' => 'http://images.outbrain.com/imageserver/v2/s/BAWl/n/lcJaT/abc/eGwRH/lcJaT-Zw2-138x138.jpg',
												'src' => 'From Web',
												'title' => 'Ketan anand tells you about the ten best underground music artist/bands from all over India with a gripping story'
											    ),
										'2'=> array(
												'link' => 'http://www.fastcoexist.com/3023405/visualized/a-stunning-visualization-of-every-popular-protest-since-1979',
												'img_src' => 'http://images.outbrain.com/imageserver/v2/s/BAWl/n/lcJaT/abc/eGwRH/lcJaT-Zw2-138x138.jpg',
												'src' => 'From Web',
												'title' => 'A Stunning Visualization Of Every Popular Protest Since 1979'	
											    ),
										'3'=> array(
												'link' => 'http://www.fastcoexist.com/3023405/visualized/a-stunning-visualization-of-every-popular-protest-since-1979',
												'img_src' => 'http://images.outbrain.com/imageserver/v2/s/BAWl/n/lcJaT/abc/eGwRH/lcJaT-Zw2-138x138.jpg',
												'src' => 'From Web',
												'title' => 'Ketan anand tells you about the ten best underground music artist/bands from all over India with a gripping story'
											    )	
									  )			
						    );
		$this->template->load('video', 'blogs/view', $data, 'sidebar');
	}
}

