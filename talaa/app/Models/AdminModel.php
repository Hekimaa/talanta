<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class AdminModel{
	protected $db;

	public function __construct(ConnectionInterface &$db){
		$this->db =& $db;

	}
	
	
	function fetchallusers(){
		return  $this->db->table('users_tbl')
		                 ->select('*')
		                 ->get()
		                ->getResult();
		                
	}

	function fetchallmessages(){
		return  $this->db->table('messages_tbl')
		                 ->select('*')
		                 ->get()
		                ->getResult();
		                
	}   

	function fetchallonlinetraining(){
		return  $this->db->table('trainings_tbl')
		                 ->select('*')
		                 ->get()
		                ->getResult();
		                
	}
        
	function fetchallfacetraining(){
		return  $this->db->table('preschedules_tbl')
		                 ->select('*')
		                 ->get()
		                ->getResult();
		                
	}

	function fetchallclients(){
		return  $this->db->table('clients_tbl')
		                 ->select('*')
		                 ->get()
		                ->getResult();
		                
	}





}