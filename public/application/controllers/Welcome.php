<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	//TODO: refactor
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function get_last_clock_in()
	{
		$this->load->model('Clock_in_model');
		$data = $this->Clock_in_model->get_last_clock();
		var_dump($data);exit;

	}
	public function get_last_clock_out()
	{
		$this->load->model('Clock_out_model');
		$data = $this->Clock_out_model->get_last_clock();
		var_dump($data);exit;
	}
	public function insert_clock_in()
	{
		$this->load->model('Clock_in_model');
		$data = $this->Clock_in_model->insert_clock_in();
		var_dump($data);exit;
	}
	public function insert_clock_out()
	{
		$this->load->model('Clock_out_model');
		$data = $this->Clock_out_model->insert_clock_out();
		var_dump($data);exit;
	}
	public function get_all_times()
	{
		$this->load->model('Clock_in_model');
		$this->load->model('Clock_out_model');
		$data1 = $this->Clock_in_model->get_all_times();
		$data2 = $this->Clock_out_model->get_all_times();
		var_dump($data1, $data2);die;
	}
}
