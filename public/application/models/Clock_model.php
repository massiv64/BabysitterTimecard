<?php
class Clock_model extends CI_Model {

    protected $table_name;

	public function get_last_clock()
	{
		$query = $this->db->get($this->table_name, 1);
		return $query->result();
	}

}	



?>