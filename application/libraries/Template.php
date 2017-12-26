<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Template
	{
		protected $_ci;	
		function __construct()
		{
			$this->_ci = &get_instance();
		}
		public function display($template,$data=null)
		{
			$data['_content'] = $this->_ci->load->view($template,$data,true);
			$data['_header'] = $this->_ci->load->view('template/header',$data,true);
			$this->_ci->load->view('template',$data);
		}

	}

