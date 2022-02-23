<?php

namespace App\Controllers;
use App\Models\TrainingModel;

class Trainings extends BaseController  
{
	public function index()
	{

         $TrainingModel = new TrainingModel();
         $data['trainings'] = $TrainingModel->findAll();

	     return view('trainings/trainings',$data);
	}

  public function trainingAll()
  {

         $TrainingModel = new TrainingModel();
         $data['trainings'] = $TrainingModel->findAll(); 
       return view('trainings/training',$data);
  }

	 public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $training_title_error = '';
            $training_price_error = '';
            $training_url_error = '';
            $training_duration_error = '';


            $image_error = '';
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'training_title'  =>  'required|min_length[3]',
                'training_price'  =>  'required',
                'training_url'  =>  'required|min_length[3]',
                'training_duration'  =>  'required',
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('training_title'))
                {
                    $training_title_error = $validation->getError('training_title');
                }
                 if($validation->getError('training_price'))
                {
                    $training_price_error = $validation->getError('training_price');
                }
                 if($validation->getError('training_url'))
                {
                    $training_url_error = $validation->getError('training_url');
                }
                 if($validation->getError('training_duration'))
                {
                    $training_duration_error = $validation->getError('training_duration');
                }


            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('training_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/trainings_image', $newName);
                    $imagee = $file->getName();
                    
                     $imagee = $file->getName();

                    $TrainingModel = new TrainingModel();
                    $TrainingModel->save([
                        'training_title'      =>  $this->request->getVar('training_title'),
                        'training_price'      =>  $this->request->getVar('training_price'),
                        'training_url'      =>  $this->request->getVar('training_url'),
                        'training_duration'      =>  $this->request->getVar('training_duration'),
                        'training_image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('training_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/trainings_image', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_user_image');
                    }

                    $TrainingModel = new TrainingModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'training_title'      =>  $this->request->getVar('training_title'),
                        'training_price'      =>  $this->request->getVar('training_price'),
                        'training_url'      =>  $this->request->getVar('training_url'),
                        'training_duration'      =>  $this->request->getVar('training_duration'),
                        'training_image' =>  $imagee
                    ];

                    $TrainingModel->update($id, $data);

                    $message = '<div class="alert alert-success">User Data Updated</div>';
                }
            }

            $output = array(
                'training_title_error'    =>  $training_title_error,
                'training_price_error'   =>  $training_price_error,
                 'training_url_error'   =>  $training_url_error,
                 'training_duration_error'   =>  $training_duration_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }


   public function fetch_single_training()
    {
        if($this->request->getVar('id'))
        {
            $TrainingModel = new TrainingModel();

             $training_data = $TrainingModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['training_title'] = $training_data['training_title'];
                  $output['training_price'] = $training_data['training_price'];
                  $output['training_url'] = $training_data['training_url'];
                  $output['training_duration'] = $training_data['training_duration'];


                     if($training_data['training_image'] != ''){

                  $output['training_image'] = '<img src ="'.base_url().'/uploads/trainings_image/'.$training_data['training_image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_user_image" name="hidden_user_image" value="'.$training_data['training_image'].'" />';
                                                           }
                          else{
                              $output['training_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }


  public  function trainings_delete()
    {
        if($this->request->getVar('id'))
        {
            $id = $this->request->getVar('id');

            $TrainingModel = new TrainingModel();

            $TrainingModel->where('id', $id)->delete($id);

            echo '<div class="alert alert-success">Clients Data Deleted</div>';
        }
    }

}
