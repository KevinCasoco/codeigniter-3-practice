<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class StudentController extends CI_Controller 
{
	public function index()
	{
		echo "I am index method in StudentController";
	}

	public function about_student()
	{
		echo "I am student method in StudentController";
	}
}
