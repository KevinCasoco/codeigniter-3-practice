<?php

class EmployeeModel extends CI_Model
{
	public function get_employee()
	{
		$query = $this->db->get('employee');
		return $query->result();
	}

	public function insert_employee($data)
	{
		return $this->db->insert('employee', $data);
	}

}
?>
