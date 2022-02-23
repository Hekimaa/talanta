<?php

namespace App\Controllers;
use App\Models\ServicesModel;

class Services extends BaseController
{
	public function index()
	{

         $ServicesModel = new ServicesModel();
         $data['services'] = $ServicesModel->findAll();

	     return view('services/services',$data);
	}

	 public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $service_title_error = '';
            $service_description_error = '';
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'service_title'  =>  'required|min_length[3]',
                'service_description'  =>  'required|min_length[3]',
                
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('service_title'))
                {
                    $service_title_error = $validation->getError('service_title');
                }

                if($validation->getError('service_description'))
                {
                    $service_description_error = $validation->getError('service_description');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('service_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/services_image', $newName);
                    $imagee = $file->getName();
                  
                    $ServicesModel = new ServicesModel();
                    $ServicesModel->save([
                        'title'      =>  $this->request->getVar('service_title'),
                        'description'      =>  $this->request->getVar('service_description'),
                        'image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('service_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/services_image', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_user_image');
                    }

                    $ServicesModel = new ServicesModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'title'      =>  $this->request->getVar('service_title'),
                        'description'      =>  $this->request->getVar('service_description'),
                        'image' =>  $imagee
                    ];

                    $ServicesModel->update($id, $data);

                    $message = '<div class="alert alert-success">User Data Updated</div>';
                }
            }

            $output = array(
                'service_description_error'    =>  $service_description_error,
                'service_title_error'   =>  $service_title_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }


   public function fetch_single_service()
    {
        if($this->request->getVar('id'))
        {
            $ServicesModel = new ServicesModel();

             $service_data = $ServicesModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['service_title'] = $service_data['title'];
                    $output['service_description'] = $service_data['description'];

                     if($service_data['image'] != ''){

                  $output['service_image'] = '<img src ="'.base_url().'/uploads/services_image/'.$service_data['image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_user_image" name="hidden_user_image" value="'.$service_data['image'].'" />';
                                                           }
                          else{
                              $output['service_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }


  public  function services_delete()
    {
        if($this->request->getVar('id'))
        {
            $id = $this->request->getVar('id');

            $ServicesModel = new ServicesModel();

            $ServicesModel->where('id', $id)->delete($id);

            echo '<div class="alert alert-success">Clients Data Deleted</div>';
        }
    }

}
