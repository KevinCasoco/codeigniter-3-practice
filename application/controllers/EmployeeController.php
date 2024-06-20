<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller 
{
	public function index()
	{
		$this->load->view('template/header');

		// 1st approach when displaying data from db
		$this->load->model("EmployeeModel");
		$data ['employee'] = $this->EmployeeModel->get_employee();

		// 2nd approach when displaying data from db
		// $this->load->model("EmployeeModel");
		// $employee = $this->EmployeeModel->get_employee();

		$this->load->view('front_end/employee', $data);
		// $this->load->view('front_end/employee', ['employee'=>$employee]);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('front_end/add_employee');
		$this->load->view('template/footer');
	}

	public function store()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required');

		if ($this->form_validation->run())
		{
			$data = [
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'phone_number' => $this->input->post('phone_number'),
				'email' => $this->input->post('email')
			];

			$this->load->model('EmployeeModel', 'emp');
			$this->emp->insert_employee($data);
			$this->session->set_flashdata('status', 'Employee Data Inserted Successfully');

			redirect(base_url('employee'));
		}

		else {
			$this->create();
			// redirect(base_url('employee/add'));
		}
	}

	public function edit($id)
	{
		$this->load->view('template/header');

		$this->load->model("EmployeeModel");
		$data ['employee'] = $this->EmployeeModel->editEmployee($id);
		$this->load->view('front_end/edit_employee', $data);

		$this->load->view('template/footer');
	}

	public function update($id)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required');

		if ($this->form_validation->run()) :

			$data = [
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'phone_number' => $this->input->post('phone_number'),
				'email' => $this->input->post('email')
			];

			$this->load->model("EmployeeModel");
			$this->EmployeeModel->updateEmployee($data, $id);
			$this->session->set_flashdata('status', 'Employee Data Updated Successfully');

			redirect(base_url('employee'));
		else :
			$this->edit($id);
		endif;

	}

	public function delete($id)
	{
		$this->load->model("EmployeeModel");
		$this->EmployeeModel->deleteEmployee($id);
		$this->session->set_flashdata('status', 'Employee Data Deleted Successfully');

		redirect(base_url('employee'));
	}

}
?>
