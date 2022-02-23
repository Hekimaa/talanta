<?php namespace App\Models;

use CodeIgniter\Model;

class PreschedulesModel extends Model
{
	protected $table = 'preschedules_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['preschedules_image', 'preschedules_title','preschedules_price','preschedules_url','preschedules_from','preschedules_to'];


}


?>
