<?php namespace App\Models;

use CodeIgniter\Model;

class MessagesModel extends Model
{
	protected $table = 'messages_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['name', 'email','subject','message'];


	
}


?>
