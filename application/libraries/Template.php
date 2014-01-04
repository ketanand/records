<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
   class Template 
   {
      var $ci;
      const HEAD_PATH = 'page/head'; 
      const HEADER_PATH = 'page/header'; 
      const FOOTER_PATH = 'page/footer';
      const CSS_PATH = 'page/head/css';
      const JS_PATH = 'page/head/scripts'; 
   
      function __construct() 
      {
         $this->ci =& get_instance();
      }

	function load($tpl_view, $body_view = null, $data = null, $sidebar = null,$banner=null) 
	{
	   $data['css'] = $this->ci->load->view(self::CSS_PATH, $data, TRUE);
	   $data['scripts'] = $this->ci->load->view(self::JS_PATH, $data, TRUE);
	   $data['head'] = $this->ci->load->view(self::HEAD_PATH, $data, TRUE);
	   $data['header'] = $this->ci->load->view(self::HEADER_PATH, $data, TRUE);

	   if ($sidebar != null){
		$data['sidebar'] = $this->ci->load->view($sidebar, $data, TRUE);
	   }
	   
	   if ($banner != null){
		$data['banner'] = $this->ci->load->view($banner, $data, TRUE);
	   }

	   if ( ! is_null( $body_view ) ) 
	   {
	      if ( file_exists( APPPATH.'views/'.$tpl_view.'/'.$body_view ) ) 
	      {
		 $body_view_path = $tpl_view.'/'.$body_view;
	      }
	      else if ( file_exists( APPPATH.'views/'.$tpl_view.'/'.$body_view.'.php' ) ) 
	      {
		 $body_view_path = $tpl_view.'/'.$body_view.'.php';
	      }
	      else if ( file_exists( APPPATH.'views/'.$body_view ) ) 
	      {
		 $body_view_path = $body_view;
	      }
	      else if ( file_exists( APPPATH.'views/'.$body_view.'.php' ) ) 
	      {
		 $body_view_path = $body_view.'.php';
	      }
	      else
	      {
		 show_error('Unable to load the requested file: ' . $tpl_name.'/'.$view_name.'.php');
	      }
	       
	      $body = $this->ci->load->view($body_view_path, $data, TRUE);
	       
	      if ( is_null($data) ) 
	      {
		 $data = array('content' => $body);
	      }
	      else if ( is_array($data) )
	      {
		 $data['content'] = $body;
	      }
	      else if ( is_object($data) )
	      {
		 $data->content = $body;
	      }
	   }

	   $data['footer'] = $this->ci->load->view(self::FOOTER_PATH, $data, TRUE);
	    
	   $this->ci->load->view('templates/'.$tpl_view, $data);
	}
   }

?>
