<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs_News extends CI_Controller {

	public function index(){
		$this->page(1);
	}

	public function page($page){
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$this->load->model('blog');
		$totalPages = $this->blog->getTotalPages();
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
		$data['blogs'] = $this->blog->getList($page);
		$this->load->model('chart');
		$data['highlights'] = $this->chart->getChartHighlights();
		$this->template->load('video', 'blogs', $data, 'sidebar');
	}

	public function view($id){
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$this->load->model('blog');
		$blog = $this->blog->load($id);
		if ($blog){
			$data['blog'] = $blog;
			$this->load->model('chart');
			$data['highlights'] = $this->chart->getChartHighlights();
			$this->template->load('video', 'blogitem', $data, 'sidebar');
		}else {
			show_404();
		}
	}


	public function news($page = null){
		if ($page == null)
			$page = 1;
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$this->load->model('news');
		$totalPages = $this->news->getTotalPages();
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
		$data['news'] = $this->news->getList($page);
		$this->load->model('chart');
		$data['highlights'] = $this->chart->getChartHighlights();
		$this->template->load('video', 'news', $data, 'sidebar');
	}

	public function newsitem($id){
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$this->load->model('news');
		$news = $this->news->load($id);
		if ($news){
			$data['news'] = $news;
			$this->load->model('chart');
			$data['highlights'] = $this->chart->getChartHighlights();
			$this->template->load('video', 'newsitem', $data, 'sidebar');
		}else {
			show_404();
		}
	}

}
?>
