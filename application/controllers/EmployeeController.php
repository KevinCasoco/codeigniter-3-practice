<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller 
{
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('front_end/employee');
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('front_end/add_employee');
		$this->load->view('template/footer');
	}
}
?>
