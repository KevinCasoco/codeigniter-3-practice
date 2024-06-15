<?php

class StudentModel extends CI_Model
{
	public function student_data()
	{
		$section = $this->student_class(); 
		return $student_name = "Andrei Kevin My Section is " . $section;
	}

	private function student_class()
	{
		return $section = "BSIS";
	}

	public function student_list($id)
	{
		if($id == '1')
		{
			return $result  = "Student ID: 1";
		}
		elseif($id == '2')
		{
			return $result  = "Student ID: 2";
		}
	}
}

?>
