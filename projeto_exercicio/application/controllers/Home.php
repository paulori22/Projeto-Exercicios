<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index()
	{	
		$query = $this->db->query("SELECT * FROM `exercicios_5_alternativas`");

		foreach ($query->result_array() as $row)
		{
			$data['enunciado'] = $row['enunciado'];
			$data['a'] = $row['A'];
			$data['b'] = $row['B'];
			$data['c'] = $row['C'];
			$data['d'] = $row['D'];
			$data['e'] = $row['E'];
		}		
		$this->load->view('exercicio_teste',$data);
	}
}
?>