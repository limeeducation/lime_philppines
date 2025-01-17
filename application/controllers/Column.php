<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//조기유학 컨트롤러
class Column extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url', 'cookie', 'script', 'login'));
		$this->load->model(array('column_model'));
	}
	public function index()
	{
		$this->detail('1');
	}

	//상품 상세 페이지 호출
	public function detail($col_idx){
		$col_detail = $this->column_model->getColumn($col_idx)[0];
		$this->load->view('column/detail', $col_detail);
	}

}
