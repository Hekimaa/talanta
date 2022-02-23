<?php

namespace App\Controllers;
use App\Models\TeamMemberModel;
use App\Models\ClientsModel;
use App\Models\TrainingModel;
use App\Models\ServicesModel;
use App\Models\PreschedulesModel;

class Home extends BaseController
{
	public function index()
	{

		 $TeamMemberModel = new TeamMemberModel();
         $data['teammember'] = $TeamMemberModel->findAll();

         $TrainingModel = new TrainingModel();
         $data['trainings'] = $TrainingModel->findAll(); 

            $PreschedulesModel = new PreschedulesModel();
         $data['preschedules'] = $PreschedulesModel->findAll();

           $ServicesModel = new ServicesModel();
         $data['services'] = $ServicesModel->findAll();

          $ClientsModel = new ClientsModel();
         $data['clients'] = $ClientsModel->findAll();
		return view('home/index',$data);
	}
}
