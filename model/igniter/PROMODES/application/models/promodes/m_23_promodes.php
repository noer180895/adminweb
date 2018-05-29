<?php
	/**
	* 
	*/
	class M_23_promodes extends Ci_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function template_select($table)
		{
			$this->db->select('*');
			$this->db->from($table);
			$query = $this->db->get();
			return $query->result();
		}
	}