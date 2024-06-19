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

	public function editEmployee($id)
	{
		$query = $this->db->get_where('employee', array('id' => $id));
		return $query->row();
	}

	public function updateEmployee($data, $id)
	{
		return $this->db->update('employee', $data, array('ID' => $id));
	}

	public function deleteEmployee($id)
	{
		return $this->db->delete('employee', array('ID' => $id));
	}

}
?>
