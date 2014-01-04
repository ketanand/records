<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends CI_Controller {

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
		//TODO : Initialize correct templates
		$this->template->load('charts', 'blog', $data, 'sidebar');
	}

	public function view($id){
		$data = array(
   				'title' => 'RecordsTree.com',
    			);
		$this->load->model('blog');
		$blog = $this->blog->load($id);
		if ($blog){
			$data['blog'] = $blog;
		}else {
			show_404();
		}
	}

}
?>
