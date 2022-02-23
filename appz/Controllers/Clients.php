<?php

namespace App\Controllers;
use App\Models\ClientsModel;

class Clients extends BaseController
{
	public function index()
	{

         $clientsmodel = new ClientsModel();
         $data['clients'] = $clientsmodel->findAll();

	     return view('clients/clients',$data);
	}

	 public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $name_error = '';
            $image_error = '';
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'client_name'  =>  'required|min_length[3]',
                
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('client_name'))
                {
                    $name_error = $validation->getError('client_name');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('client_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/clients_image', $newName);
                    $imagee = $file->getName();
                    
                     $imagee = $file->getName();

                    $ClientsModel = new ClientsModel();
                    $ClientsModel->save([
                        'client_name'      =>  $this->request->getVar('client_name'),
                        'client_image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('client_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/client_images', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_user_image');
                    }

                    $ClientsModel = new ClientsModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'client_name'      =>  $this->request->getVar('client_name'),
                         'client_image' => $imagee
                    ];

                    $ClientsModel->update($id, $data);

                    $message = '<div class="alert alert-success">User Data Updated</div>';
                }
            }

            $output = array(
                'name_error'    =>  $name_error,
                'image_error'   =>  $image_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }


   public function fetch_single_client()
    {
        if($this->request->getVar('id'))
        {
            $ClientsModel = new ClientsModel();

             $client_data = $ClientsModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['client_name'] = $client_data['client_name'];

                     if($client_data['client_image'] != ''){

                  $output['client_image'] = '<img src ="'.base_url().'/uploads/clients_image/'.$client_data['client_image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_user_image" name="hidden_user_image" value="'.$client_data['client_image'].'" />';
                                                           }
                          else{
                              $output['client_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }


  public  function clients_delete()
    {
        if($this->request->getVar('id'))
        {
            $id = $this->request->getVar('id');

            $ClientsModel = new ClientsModel();

            $ClientsModel->where('id', $id)->delete($id);

            echo '<div class="alert alert-success">Clients Data Deleted</div>';
        }
    }

}
