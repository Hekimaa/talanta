<?php

namespace App\Controllers;
use App\Models\ServicesModel;

class SkillsEnterprise extends BaseController
{
	public function index()
	{

             $ServicesModel = new ServicesModel();
             $data['skills'] = $ServicesModel->where('id',3)->first();
	        return view('skillsenterprise/skillsenterprise',$data);


	}
}
