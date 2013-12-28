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

	public function top100(){
		$data = array(
   				'title' => 'RecordsTree.com',
				'id' => 1
    			);
		$this->template->load('charts', 'list', $data, 'sidebar');
	}

        public function charts($name){
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$this->load->model('chart');
		$chart = $this->chart->loadByName($name);
		if ($chart){
			$chartItems = $chart->getList();
			$data['title'] = $this->chart->getData('title');
			$data['items'] = $chartItems;
			$this->template->load('charts', 'list', $data, 'sidebar');
		}else {
			echo "chart not found"; 
		}
	}

	public function search(){
		$this->load->model('product');
		$data['result'] = false;
		if (!empty($_POST['q'])){
			$data['result'] = $this->product->search($_POST['q']);
		}else {
			echo 'please enter a search term';
			return;
		}
		$this->load->view('search_result', $data);
	}

	public function product($id){
		echo $id;
		exit;
		$this->load->model('product');
		$mainProduct = $this->product->getById($id);
		if ($mainProduct){
			$relatedProduct = $this->product->getRelatedProducts($mainProduct['group_id']);
		}else {
			show_404();
		}
		$data['product'] = $mainProduct;
		$data['related'] = $relatedProduct;
 		$this->load->view('product_page', $data);
	}
	
	public function upload(){
		$this->load->view('upload');
	}

	public function uploader(){
		$this->load->model('product/uploader', 'uploader');
		$this->uploader->upload();
	}

	public function success(){
		$html = 'Products were uploaded successfully <br /><br />';
		$html .= '<a href="/" >Search Movies</a> <br />';
		$html .= '<a href="/movies/upload" >Upload More Products</a> <br />';
		echo $html;		
	}

	public function test(){
		echo 'test successful';
	}


}

