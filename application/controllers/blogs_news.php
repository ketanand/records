<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'controllers/abstract.php');
class Blogs_News extends AbstactController {

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
			$data['blog'] = $blog->getData();
			$this->load->model('author');
			$authorData = $this->author->loadById($data['blog']['author_id']);
			$data['author'] = $authorData;
			$this->load->model('chart');
			$data['highlights'] = $this->chart->getChartHighlights();
			$this->template->load('video', 'blogs/view', $data, 'sidebar');
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
			$data['news'] = $news->getData();
			$this->load->model('chart');
			$data['highlights'] = $this->chart->getChartHighlights();
			$this->template->load('video', 'newsitem', $data, 'sidebar');
		}else {
			show_404();
		}
	}

	public function comment(){
		$blogId = $this->input->post('id');
		$comment = $this->security->xss_clean($this->input->post('comment'));
		$name = $this->security->xss_clean($this->input->post('name'));
		$this->load->model('blog/comment', 'comment');
		$this->comment->setData('comment', $comment);
		$this->comment->setData('name', $name);
		$this->comment->setData('blog_id', $blogId);
		$result = $this->comment->save();
		if (is_array($result)){
			$reponse['status'] = 'error';
			$response['error_data'] = $result;
		}else {
			$response['status'] = 'success';
			$response['data'] = $this->comment->getData();
		}
		header('content-type : application/json');
		echo json_encode($response);
	}

	public function getcomment($id){
		$this->load->model('blog/comment', 'comment');
		$data = $this->comment->loadByBlogId($id);
		if ($data){
			$response['success'] = 1;
			$response['data'] = $data;
		}else{
			$response['success'] = '0';
			$response['data']['count'] = 0;
		}
		header('content-type : application/json');
		echo json_encode($response);
	}

	public function getRelated($id){
		$this->load->model('blog/related', 'related');
		$data = $this->related->loadByBlogId($id);
		if ($data){
			$response['success'] = 1;
			$response['data'] = $data;
		}else{
			$response['success'] = '0';
			$response['data']['count'] = 0;
		}
		header('content-type : application/json');
		echo json_encode($response);
	}

}
?>
