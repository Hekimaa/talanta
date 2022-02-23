<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admins extends BaseController
{
	public function index()
	{  
		
        $db = db_connect();
        $AdminModel = new AdminModel($db);
        $dataa = $AdminModel->fetchallusers();
        $data['users'] = count($dataa); 
        $dataa = $AdminModel->fetchallmessages();
        $data['messages'] = count($dataa);  
        $dataa = $AdminModel->fetchallonlinetraining();
        $data['training'] = count($dataa);
        $dataa = $AdminModel->fetchallfacetraining();
        $data['face'] = count($dataa); 
        $dataa = $AdminModel->fetchallclients();
        $data['clients'] = count($dataa);
	return view('admins/admins',$data);



	}
}
