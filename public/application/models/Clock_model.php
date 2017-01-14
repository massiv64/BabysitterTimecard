<?php
class Clock_model extends CI_Model {

	public function get_last_clock_in()
	{
		$query = $this->db->get('entries', 1);
		return $query->result();
	}


}



?>