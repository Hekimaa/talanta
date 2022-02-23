<?php

namespace App\Controllers;
use App\Models\TeamMemberModel;
use App\Models\ClientsModel;

class AboutUs extends BaseController
{
	public function index()
	{

		 $TeamMemberModel = new TeamMemberModel();
         $data['teammember'] = $TeamMemberModel->findAll();
           $ClientsModel = new ClientsModel();
         $data['clients'] = $ClientsModel->findAll();

	  return view('aboutus/about_us',$data);


	}
}
