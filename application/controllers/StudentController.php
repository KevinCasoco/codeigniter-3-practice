<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class StudentController extends CI_Controller 
{
	public function index()
	{
		echo "I am index method in StudentController called student in route";
	}

	public function about_student()
	{
		echo "I am student method in StudentController called student in route";
	}

	public function list($list_url = '')
	{
		echo "$list_url";
		$this->load->view('student_list');
	}

	public function edit_list($list_url = '')
	{
		echo "$list_url";
		$this->load->view('edit_student_list');
	}
}
