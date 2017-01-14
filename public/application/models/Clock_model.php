<?php
class Clock_model extends CI_Model {

	public function get_last_clock_in()
	{
		$query = $this->db->get('clock_in', 1);
		return $query->result();
	}
	public function get_last_clock_out()
	{
		$query = $this->db->get('clock_out', 1);
		return $query->result();
	}

}	



?>