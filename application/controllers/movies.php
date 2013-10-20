<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movies extends CI_Controller {

	public function index()
	{
		$this->load->view('home_page');
	}

	public function search(){
		$this->load->model('product');
		$data['result'] = false;
		if (!empty($_POST['q'])){
			$data['result'] = $this->product->search($_POST['q']);
		}
		$this->load->view('search_result', $data);
	}

	public function product($id){
		$this->load->model('product');
		$mainProduct = $this->product->getById($id);
		if ($mainProduct){
			$relatedProduct = $this->product->getRelatedProducts($mainProduct['group_id']);
		}else {
			header("HTTP/1.1 404 Not Found");
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
		$this->load->model('product');
		$this->product->getById('MV12UN0001-1');
	}


}

