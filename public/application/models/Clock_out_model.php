<?php

require_once "Clock_model.php";

class Clock_out_model extends Clock_model {

    protected $table_name = 'clock_out';

    public function insert_clock_out($time = null)
	{
		$time = new DateTime();
		// echo $time->format('Y-m-d H:i:s');
		$time = $time->format('Y-m-d H:i:s');
		$data = array(
			'time' => $time		
			);
		$this->db->insert($this->table_name, $data);
	}

}	



?>