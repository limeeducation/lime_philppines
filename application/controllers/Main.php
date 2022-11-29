<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url', 'script', 'banner'));
		$this->load->model(array('old_model'));
	}
	public function index()
	{
		$query = "select * from ms_board_table where isdel <> '1' order by idx desc limit 0,3";
		$result = $this->old_model->run_query($query);
		$query = "select * from ms_board_table where isdel <> '1' order by idx desc limit 3,6";
		$result2 = $this->old_model->run_query($query);
		$this->load->view('main/old_main', array(
        			'result' 	=> $result,
        			'result2'	=> $result2
        ));
	}

	//신규 메인페이지
	public function new_main(){
		$normal_banner_list = get_banner("1", "normal");
		$event_banner_list = get_banner("1", "event");
		$this->load->view('main/main', array(
			'normal_banner_list'		=> $normal_banner_list,
			'event_banner_list'			=> $event_banner_list
		));
	}
}
