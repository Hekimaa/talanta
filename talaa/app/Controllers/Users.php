<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Users extends BaseController  
{
	public function index()
	{
   
         $UsersModel = new UsersModel();
         $data['users'] = $UsersModel->findAll();
	     return view('users/users',$data);
	}

	public function index_login()
	{
  
	     return view('users/login');
	}

	 public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $full_name_error = '';
            $email_error = '';
            $password_error = '';
            $password_confirm_error = '';


            $image_error = '';
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([

              	'full_name'=>'required|min_length[3]|max_length[20]',
				'email'=>'required|min_length[6]|max_length[50]|valid_email',
                'password' =>'required|min_length[1]|max_length[255]',
				'password_confirm' => 'matches[password]',
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('full_name'))
                {
                    $full_name_error = $validation->getError('full_name');
                }
                 if($validation->getError('email'))
                {
                    $email_error = $validation->getError('email');
                }
                 if($validation->getError('password'))
                {
                    $password_error = $validation->getError('password');
                }
                 if($validation->getError('password_confirm'))
                {
                    $password_confirm_error = $validation->getError('password_confirm');
                }


            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('user_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/users', $newName);
                    $imagee = $file->getName();
                    
                     

                     $token = md5(str_shuffle('abcdefjhijklmnozxy'.time()));

                    $UsersModel = new UsersModel();
                    $UsersModel->save([
                        'full_name'      =>  $this->request->getVar('full_name'),
                        'email'      =>  $this->request->getVar('email'),
                        'password'      =>  $this->request->getVar('password'),
                        'token' =>  $token,
                        'image' => $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('user_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/users', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_user_image');
                    }

                    $UsersModel = new UsersModel();

                    $id = $this->request->getVar('hidden_id');
                    $token = md5(str_shuffle('abcdefjhijklmnozxy'.time()));

                    $data = [
                        'full_name'      =>  $this->request->getVar('full_name'),
                        'email'      =>  $this->request->getVar('email'),
                        'password'      =>  $this->request->getVar('password'),
                        'token' =>  $token,
                        'image' => $imagee
                    ];

                    $UsersModel->update($id, $data);

                    $message = '<div class="alert alert-success">User Data Updated</div>';
                }
            }

            $output = array(
                'full_name_error'    =>  $full_name_error,
                'email_error'   =>  $email_error,
                'password_error'   =>  $password_error,
                'password_confirm_error'   =>  $password_confirm_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }


   public function fetch_single_user()
    {
        if($this->request->getVar('id'))
        {
            $UsersModel = new UsersModel();

             $user_data = $UsersModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['full_name'] = $user_data['full_name'];
                  $output['email'] = $user_data['email'];
                  $output['image'] = $user_data['image'];
                 

                     if($user_data['image'] != ''){

                  $output['image'] = '<img src ="'.base_url().'/uploads/users/'.$user_data['image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_user_image" name="hidden_user_image" value="'.$user_data['image'].'" />';
                                                           }
                          else{
                              $output['image'] = '<input type="hidden" name="hidden_user_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }


  public  function users_delete()
    {
        if($this->request->getVar('id'))
        {
            $id = $this->request->getVar('id');

            $UsersModel = new UsersModel();

            $UsersModel->where('id', $id)->delete($id);

            echo '<div class="alert alert-success">Clients Data Deleted</div>';
        }
    }

    	public function login()
	{   
		$data =[];
		helper(['form']);
		if($this->request->getMethod() =='post'){
			$rules = [
				
				'email'=>'required|min_length[6]|max_length[50]|valid_email',
				'password'=>'required|min_length[1]|max_length[255]|validateUser[email,password]',
				
			];
			
			$errors = [
				'password'=>[
					'validateUser'=>'Email or Password incorrect'
				]
			];
			if(!$this->validate($rules,$errors)){
			$data['validation'] = $this->validator;


		}else{
			$model = new UsersModel();
			  
			  $user = $model->where('email',$this->request->getVar('email'))
			                ->first();
			                
			    $this->setUserMethod($user);
			    return redirect()->to(base_url().'/admins');
			
		}

		}
		
		return view('users/login.php',$data);

	}

	private function setUserMethod($user){
		$data =[
			'id' =>$user['id'],
			'full_name' =>$user['full_name'],
			'email' =>$user['email'],
			'image' =>$user['image'],
			'isLoggedIn' =>true,
		];
		session()->set($data);
		return true;
	}

		public function forget(){
      
        $data =[];
        $session = session();
		helper(['form']);
 
    if($this->request->getMethod()=='post'){
    	$rules = [
    		'email'=>[
    			'label'=>'Email',
    			'rules'=>'required|valid_email',
    			'errors'=>[
    				'required'=>'{field} field required',
    				'valid_email'=>'Valid {field} required'
    			],
    		],
    	];
    	if($this->validate($rules)){
    		$email = $this->request->getVar('email');
    		$userdata = $this->verifyEmail($email);
    		  if(!empty($userdata)){
                 
                 if($this->updated($userdata['token'])){
                 	$email = \Config\Services::email();
                 	$subject = 'Reset Password link';
                 	$token = $userdata['token'];
                 	$message = 'Hi   '.$userdata['full_name'].'<br><br>'
                 	          .'Your reset password request has been received.Please click'
                 	          .'   the below link to reset your password.<br><br>'
                 	          .'<a href="'.base_url().'/users/reset_password/'.$token.'">Click Here</a>'
                 	          .'Thanks<br>';
                 	          
                 	$email->setFrom("chrisfausty@gmail.com");
                 	$email->setTo($this->request->getVar('email'));
                 	$email->setSubject($subject);
                 	$email->setMessage($message);
                 	 if($email->send()){

                 	 	 $session->setTempdata('success','Reset link sent to your registered email.Please Verify within 1 hour ',3);
                 	 
                 	 }else{
                 	 	echo $email->printDebugger();
                 	 }

                 }else{
                 	echo "unable to updated";
                 }
    		  }else{
    		  	 $session->setTempdata('error','This Email does not exist',3);
    		  }
    	}
    	else{
    		$data['validation'] = $this->validator;
    	}
    }



		return view('users/forget_password',$data);
		
	}

	public function verifyEmail($email){
	 	$db = \Config\Database::connect();
	 	$builder = $db->table('users_tbl');
	 	$builder->where('email',$email);
	 	$query = $builder->get();
	 	  if(count($query->getResultArray())==1){
	 	  	return $query->getRowArray();

	 	  }else{
	 	  	return  false;
	 	  }
	 }

	   public function updated($id){
	 	$db = \Config\Database::connect();
	 	$builder = $db->table('users_tbl');
	 	$builder->where('token',$id);
	 	$builder->update(['updated_at'=>date('Y-m-d h:i:s')]);
	 	  if($db->affectedRows() ==1){
	 	  	return true;

	 	  }else{
	 	  	return  false;
	 	  }
	 }


	  public function reset_password($token=null){

               
	      $data =[];
	      $data['token'] = $token;
		 helper(['form']);
	     if($token){
	     	  $userdata = $this->verifyToken($token);
	     	     if(!empty($userdata)){

	     	     	 if($this->verifyExpiryDate($userdata['updated_at'])){
	     	     	 	if($this->request->getMethod() =='post'){
                           
	     	     	 	
	     	     	 		$rules = [
	     	     	 			'password'=>[
	     	     	 				'label'=>'Password',
	     	     	 				'rules'=>'required|min_length[1]|max_length[6]',
	     	     	 			],
	     	     	 			'password_confirm'=>[
	     	     	 				'label' => 'Confirm Password',
	     	     	 				'rules' => 'required|matches[password]'
	     	     	 			],
	     	     	 		];
	     	     	 		if($this->validate($rules)){
	     	     	 			$password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
	     	     	 			 if($this->updatePassword($token,$password)){
	     	     	 			 	return redirect()->to(base_url().'/admins');
	     	     	 			 }else{
	     	     	 			 	return redirect()->to(current_url());
	     	     	 			 }
	     	     	 		}else{
	     	     	 			$data['validation'] = $this->validator;
	     	     	 		}
	     	     	 	}
                      
	     	     	 }else{
                      
                       $session->setTempdata('error','Reset password link was expired',3);
	     	     	 }

	     	     }else{
	     	     	 $session->setTempdata('error','Unable to find user account',3);
	     	     	
	     	     }

	     }else{
	     	$session->setTempdata('error','Unauthorize access',3);
	     
	     }
	
	
		return view('users/reset_password',$data);
	
	 }

	  public function verifyToken($token){
	 	$db = \Config\Database::connect();
	 	$builder = $db->table('users_tbl');
	 	$builder->where('token',$token);
	 	$query = $builder->get();
	 	  if(count($query->getResultArray())==1){
	 	  	return $query->getRowArray();

	 	  }else{
	 	  	return  false;
	 	  }
	 }
	  public function verifyExpiryDate($time){
       $updated_time = strtotime($time);
       $current_time = strtotime(date("Y-m-d h:i:s"));
       $timeDiff = ($current_time - $updated_time)/60;

	 		if($timeDiff < 900000){
	 	  	return true;

	 	  }else{
	 	  	return  false;
	 	  }
	 }

	  public function updatePassword($token,$pass){
	 	$db = \Config\Database::connect();
	 	$builder = $db->table('users_tbl');
	 	$builder->where('token',$token);
	 	$builder->update(['password'=>$pass]);
	 	   if($db->affectedRows() ==1){
	 	  	return true;

	 	  }else{
	 	  	return  false;
	 	  }

	 }

	public function logout(){
  
      session()->destroy();
      return redirect()->to(base_url().'/users/index_login');
  }

}
