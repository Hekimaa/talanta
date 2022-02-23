<?php namespace App\Models;

use CodeIgniter\Model;

class ClientsModel extends Model
{
	protected $table = 'clients_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['client_name', 'client_image'];



	
}


?>
