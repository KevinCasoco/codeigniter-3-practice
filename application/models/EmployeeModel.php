<?php

class EmployeeModel extends CI_Model
{
	public function insert_employee($data)
	{
		return $this->db->insert('employee', $data);
	}

}
?>
