<?php namespace App\Models;

use CodeIgniter\Model;

class ServicesModel extends Model
{
	protected $table = 'services_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['title', 'image','description'];



	
}


?>
