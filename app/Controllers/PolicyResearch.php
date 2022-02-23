<?php

namespace App\Controllers;
use App\Models\ServicesModel;

class PolicyResearch extends BaseController
{
	public function index()
	{

	         $ServicesModel = new ServicesModel();
             $data['policy'] = $ServicesModel->where('id',1)->first();
             

	         return view('policyresearch/policyresearch',$data);

	}
}
