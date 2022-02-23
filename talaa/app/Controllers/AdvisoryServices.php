<?php

namespace App\Controllers;
use App\Models\ServicesModel;

class AdvisoryServices extends BaseController
{
	public function index()
	{

       $ServicesModel = new ServicesModel();
       $data['advisory'] = $ServicesModel->where('id',2)->first();
	  return view('advisoryservices/advisoryservices',$data);


	}
}
