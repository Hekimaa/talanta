<?php

namespace App\Controllers;
use App\Models\PreschedulesModel;

class Preschedules extends BaseController
{
	public function index()
	{

         $PreschedulesModel = new PreschedulesModel();
         $data['preschedules'] = $PreschedulesModel->findAll();

	     return view('preschedules/preschedules',$data);
	}

  public function prescheduleAll()
  {

        $PreschedulesModel = new PreschedulesModel();
        $data['preschedule'] = $PreschedulesModel->findAll();
       return view('preschedules/preschedule',$data);
  }

	 public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $preschedules_title_error = '';
            $preschedules_price_error = '';
            $preschedules_url_error = '';
            $preschedules_from_error = '';
            $preschedules_to_error = '';


            $image_error = '';
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'preschedules_title'  =>  'required|min_length[3]',
                'preschedules_price'  =>  'required',
                'preschedules_url'  =>  'required|min_length[3]',
                'preschedules_from'  =>  'required',
                'preschedules_to'  =>  'required',
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('preschedules_title'))
                {
                    $preschedules_title_error = $validation->getError('preschedules_title');
                }
                 if($validation->getError('preschedules_price'))
                {
                    $preschedules_price_error = $validation->getError('preschedules_price');
                }
                 if($validation->getError('preschedules_url'))
                {
                    $preschedules_url_error = $validation->getError('preschedules_url');
                }
                 if($validation->getError('preschedules_from'))
                {
                    $preschedules_from_error = $validation->getError('preschedules_from');
                }
                   if($validation->getError('preschedules_to'))
                {
                    $preschedules_to_error = $validation->getError('preschedules_to');
                }


            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('preschedules_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/preschedules_image', $newName);
                    $imagee = $file->getName();
                    
                     $imagee = $file->getName();

                    $PreschedulesModel = new PreschedulesModel();
                    $PreschedulesModel->save([
                        'preschedules_title'      =>  $this->request->getVar('preschedules_title'),
                        'preschedules_price'      =>  $this->request->getVar('preschedules_price'),
                        'preschedules_url'      =>  $this->request->getVar('preschedules_url'),
                        'preschedules_from'      =>  $this->request->getVar('preschedules_from'),
                        'preschedules_to'      =>  $this->request->getVar('preschedules_to'),
                        'preschedules_image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('preschedules_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/preschedules_image', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_user_image');
                    }

                    $PreschedulesModel = new PreschedulesModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'preschedules_title'      =>  $this->request->getVar('preschedules_title'),
                        'preschedules_price'      =>  $this->request->getVar('preschedules_price'),
                        'preschedules_url'      =>  $this->request->getVar('preschedules_url'),
                        'preschedules_from'      =>  $this->request->getVar('preschedules_from'),
                        'preschedules_to'      =>  $this->request->getVar('preschedules_to'),
                        'preschedules_image' =>  $imagee

                    ];

                    $PreschedulesModel->update($id, $data);

                    $message = '<div class="alert alert-success">User Data Updated</div>';
                }
            }

            $output = array(
                'preschedules_title_error'    =>  $preschedules_title_error,
                'preschedules_price_error'   =>  $preschedules_price_error,
                 'preschedules_url_error'   =>  $preschedules_url_error,
                 'preschedules_from_error'   =>  $preschedules_from_error,
                 'preschedules_to_error'   =>  $preschedules_to_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }


   public function fetch_single_preschedules()
    {
        if($this->request->getVar('id'))
        {
            $PreschedulesModel = new PreschedulesModel();

             $preschedules_data = $PreschedulesModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['preschedules_title'] = $preschedules_data['preschedules_title'];
                  $output['preschedules_price'] = $preschedules_data['preschedules_price'];
                  $output['preschedules_url'] = $preschedules_data['preschedules_url'];
                  $output['preschedules_from'] = $preschedules_data['preschedules_from'];
                  $output['preschedules_to'] = $preschedules_data['preschedules_to'];


                     if($preschedules_data['preschedules_image'] != ''){

                  $output['preschedules_image'] = '<img src ="'.base_url().'/uploads/preschedules_image/'.$preschedules_data['preschedules_image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_user_image" name="hidden_user_image" value="'.$preschedules_data['preschedules_image'].'" />';
                                                           }
                          else{
                              $output['preschedules_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }


  public  function preschedules_delete()
    {
        if($this->request->getVar('id'))
        {
            $id = $this->request->getVar('id');

            $PreschedulesModel = new PreschedulesModel();

            $PreschedulesModel->where('id', $id)->delete($id);

            echo '<div class="alert alert-success">Clients Data Deleted</div>';
        }
    }

}
