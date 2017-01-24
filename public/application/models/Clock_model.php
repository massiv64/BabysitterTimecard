<?php
class Clock_model extends CI_Model {


    protected $table_name;

	public function get_last_clock()
	{
		$query = $this->db->get($this->table_name, 1);
		return $query->result();
	}
	//TODO: refactor
	public function insert_clock_in($time = null)
	{
		$time = new DateTime();
		// echo $time->format('Y-m-d H:i:s');
		$time = $time->format('Y-m-d H:i:s');
		$data = array(
			'time' => $time		
			);
		$this->db->insert($this->table_name, $data);
	}
	public function get_all_times()
	{
		$query = $this->db->get($this->table_name);
		return $query->result();

	}

}	

?>