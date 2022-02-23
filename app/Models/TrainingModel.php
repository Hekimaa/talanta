<?php namespace App\Models;

use CodeIgniter\Model;

class TrainingModel extends Model
{
	protected $table = 'trainings_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['training_title', 'training_image','training_price','training_url','training_duration'];


}


?>
