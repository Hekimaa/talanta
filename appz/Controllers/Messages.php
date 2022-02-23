<?php

namespace App\Controllers;
zzuse\App\Models\MessagesModel;
use App\Models\TeamMemberModel;
use App\Models\ClientsModel;
use App\Models\TrainingModel;
use App\Models\ServicesModel;
use App\Models\PreschedulesModel;

class Messages extends BaseController
{
	public function index()
	{

         if($this->request->getMethod() =='post'){

           $data = array(
            'name' =>$this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject') ,
            'message' => $this->request->getVar('message')
             );
            

            $MessagesModel =  new MessagesModel();
		     $MessagesModel->save($data); 

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

    public function contacts()
    {

   if($this->request->getMethod() =='post'){

           $data = array(
            'name' =>$this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject') ,
            'message' => $this->request->getVar('message')
             );

             $MessagesModel =  new MessagesModel();
             $MessagesModel->save($data); 
            
        return view('contacts/contacts');
       }

    }
	
	public function ReadMessages(){

		  $MessagesModel = new MessagesModel();
          $data['message'] = $MessagesModel->findAll();

	       return view('message/message',$data);
		
	}

	  public  function messages_delete()
    {
        if($this->request->getVar('id'))
        {
            $id = $this->request->getVar('id');

            $MessagesModel = new MessagesModel();

            $MessagesModel->where('id', $id)->delete($id);

            echo '<div class="alert alert-success">Clients Data Deleted</div>';
        }
    }
}
