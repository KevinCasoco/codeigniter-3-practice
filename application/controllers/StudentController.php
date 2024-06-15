<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class StudentController extends CI_Controller 
{
	public function index()
	{
		// Load the StudentModel
		$this->load->model('StudentModel', 'stud_function');

		// 1st method approach to access the model using $this->StudentModel
		// $student = $this->StudentModel->student_data();

		// 2nd method approach to access the model directly using StudentModel
		$student = new StudentModel;
		$student = $student->student_data();

		// $student = $this->stud_function->student_data();
		// $student_class = $this->stud_function->student_class();

		echo "Student Name: " . $student;
	}

	public function show($id)
    {
        // Load the StudentModel with an alias 'stud'
        $this->load->model('StudentModel', 'stud_list');

        // Fetch student data using the model and the provided ID
        // $selected_student = $this->stud_list->student_list($id);

        // Echo the selected student data
        // echo $selected_student;
    }

	// print string using controller
	public function about_student()
	{
		echo "I am student method in StudentController called student in route";
	}

	// print parameter id with the view
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
