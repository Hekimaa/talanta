<?php namespace App\Models;

use CodeIgniter\Model;

class TeamMemberModel extends Model
{
	protected $table = 'teammember_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['full_name', 'image','role'];



	
}


?>
