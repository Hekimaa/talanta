<?php

namespace App\Controllers;
use App\Models\TeamMemberModel;

class TeamMembers extends BaseController
{
	public function index()
	{

         $TeamMemberModel = new TeamMemberModel();
         $data['teammember'] = $TeamMemberModel->findAll();

	       return view('teammember/teammember',$data);
	}

	 public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $full_name_error = '';  

            $role_error = '';

            $image_error = '';
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'full_name'  =>  'required|min_length[3]',
                'role'  =>  'required|min_length[3]',
                
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('full_name'))
                {
                    $full_name_error = $validation->getError('full_name');
                }

                if($validation->getError('role'))
                {
                    $role_error = $validation->getError('role');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('member_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/teammembers', $newName);
                    $imagee = $file->getName();
                    
                     $imagee = $file->getName();

                    $TeamMemberModel = new TeamMemberModel();
                    $TeamMemberModel->save([
                        'full_name'      =>  $this->request->getVar('full_name'),
                        'role'      =>  $this->request->getVar('role'),
                        'image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('member_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/teammembers', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_user_image');
                    }

                    $TeamMemberModel = new TeamMemberModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'full_name'      =>  $this->request->getVar('full_name'),
                        'role'      =>  $this->request->getVar('role'),
                        'image' =>  $imagee
                    ];

                    $TeamMemberModel->update($id, $data);

                    $message = '<div class="alert alert-success">User Data Updated</div>';
                }
            }

            $output = array(
                'full_name_error'    =>  $full_name_error,  
                'role_error'    =>  $role_error,
                'image_error'   =>  $image_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }


   public function fetch_single_member()
    {
        if($this->request->getVar('id'))
        {
            $TeamMemberModel = new TeamMemberModel();

             $teammember_data = $TeamMemberModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['full_name'] = $teammember_data['full_name'];
                  $output['role'] = $teammember_data['role'];

                     if($teammember_data['image'] != ''){

                  $output['image'] = '<img src ="'.base_url().'/uploads/TeamMembers/'.$teammember_data['image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_user_image" name="hidden_user_image" value="'.$teammember_data['image'].'" />';
                                                           }
                          else{
                              $output['image'] = '<input type="hidden" name="hidden_user_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }


  public  function teammember_delete()
    {
        if($this->request->getVar('id'))
        {
            $id = $this->request->getVar('id');

            $TeamMemberModel = new TeamMemberModel();

            $TeamMemberModel->where('id', $id)->delete($id);

            echo '<div class="alert alert-success">Clients Data Deleted</div>';
        }
    }

}
