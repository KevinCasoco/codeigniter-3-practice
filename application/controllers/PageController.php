<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller 
{
	// public function students_list()
	// {
	// 	$data ['title'] = "This is Variable data";
	// 	$data ['body'] = "Welcome to my CodeIgniter journey";
	// 	$this->load->view('student_list', $data);

	// }

	public function students_list()
	{
		$this->load->model('StudentModel');
		$title = $this->StudentModel->content();

		$data ['title'] = $title;
		$data ['body'] = "Welcome to my CodeIgniter journey";
		$this->load->view('student_list', $data);

	}

}
