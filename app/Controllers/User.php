<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\BankModel;

class User extends BaseController
{
    public function __construct() {

		$db = db_connect();
		$this->userModel = new UserModel($db);
		$this->BankModel = new BankModel($db);
	}


    public function index()
    {
        return view('signin');
    }

    //Create Account
    public function create_account()
    {
        $rules = [
            'fullname' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'password' => 'required|numeric|max_length[10]'
        ];

        if($this->validate($rules)){
            $fullname	= $this->request->getPost('fullname');
            $email	= $this->request->getPost('email');
            $password   = $this->request->getPost('password');
            date_default_timezone_set('Asia/Kolkata');
            $now = date('Y-m-d H:i:s');

            $data = [
                'username'		=> $fullname,
                'email'		=> $email,
                'password'			=> password_hash($password, PASSWORD_DEFAULT),
                'created_at'			=> $now,
                'updated_at'			=> $now,
            ];

            $result = $this->userModel->add($data);
            if($result) {
                session()->setFlashdata('message', 'New user '.$email.' is registered successfully.');
                session()->setFlashdata('alert-class', 'alert-success');
            } else {
                session()->setFlashdata('message', 'Something Went Wrong!');
                session()->setFlashdata('alert-class', 'alert-danger');
            }
            echo view('signin', $data);

        } else {
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
    }

    //Create Account
    public function loginAuth()
    {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $this->userModel->auth_check($email);
            //print_r($user);
            if($user){
                $pass = $user[0]['password'];
                $authenticatePassword = password_verify($password, $pass);

                if($authenticatePassword) {
                    $ses_data = [
                        'id' => $user[0]['userid'],
                        'name' => $user[0]['username'],
                        'email' => $user[0]['email'],
                        'isLoggedIn' => TRUE
                    ];

                    session()->set($ses_data);
                    return redirect()->to('index');

                } else {
                    session()->setFlashdata('message', 'Password is incorrect.');
                    session()->setFlashdata('alert-class', 'alert-danger');
                    return redirect()->to('/');
                }
            }else{
                session()->setFlashdata('message', 'Email does not exist.');
                session()->setFlashdata('alert-class', 'alert-danger');
                return redirect()->to('/');
            }
    }

    //Create Bank Account
    public function insertBank()
    {
        $rules = [
            'account_holdr_name' => 'required|min_length[3]',
            'bank_name' => 'required',
            'account_no' => 'required|numeric|max_length[50]',
            'ifsc' => 'required|max_length[20]',
            'amount_in_words' => 'required|max_length[20]',
            'amount_in_number' => 'required|max_length[20]',
            // 'date' => 'required|max_length[20]'
        ];

        if($this->validate($rules)){
            $acc_holdr_name	= $this->request->getPost('account_holdr_name');
            $userid	= session()->get('id');
            $bank_name	= $this->request->getPost('bank_name');
            $acc_no   = $this->request->getPost('account_no');
            $ifsc   = $this->request->getPost('ifsc');
            $amount_in_words   = $this->request->getPost('amount_in_words');
            $amount_in_number   = $this->request->getPost('amount_in_number');
            // $date   = $this->request->getPost('date');
            date_default_timezone_set('Asia/Kolkata');
            $now = date('Y-m-d H:i:s');

            $data = [
                'acc_holdr_name' => $acc_holdr_name,
                'userid'         => $userid,
                'bank_name'		 => $bank_name,
                'acc_no'		 => $acc_no,
                'ifsc'			 => $ifsc,
                'amount_in_words'			 => $amount_in_words,
                'amount_in_number'			 => $amount_in_number,
                // 'date'			 => $date,
                'created_at'	 => $now,
                'updated_at'	 => $now,
            ];

            $result = $this->BankModel->add($data);
            if($result) {
                session()->setFlashdata('message', 'Bank Details is saved successfully.');
                session()->setFlashdata('alert-class', 'alert-success');
            } else {
                session()->setFlashdata('message', 'Something Went Wrong!');
                session()->setFlashdata('alert-class', 'alert-danger');
            }
            //echo view('bankList', $data);
            return $this->response->redirect(site_url('bankList'));
        } else {
            $data['validation'] = $this->validator;
            echo view('addBank', $data);
        }
    }

    public function logOut()
    {
        session()->destroy();
        return $this->response->redirect(site_url());
    }

    //Create Bank Account
    public function updateBank()
    {
        $id = $this->request->getPost('bank_id');

        $rules = [
            'account_holdr_name' => 'required|min_length[3]',
            'bank_name' => 'required',
            'account_no' => 'required|numeric|max_length[50]',
            'ifsc' => 'required|max_length[20]',
            'amount_in_words' => 'required|max_length[20]',
            'amount_in_number' => 'required|max_length[20]'
        ];

        if($this->validate($rules)){

            $acc_holdr_name	= $this->request->getPost('account_holdr_name');
            $userid	= session()->get('id');
            $bank_name	= $this->request->getPost('bank_name');
            $acc_no   = $this->request->getPost('account_no');
            $ifsc   = $this->request->getPost('ifsc');
             $amount_in_words   = $this->request->getPost('amount_in_words');
             $amount_in_number   = $this->request->getPost('amount_in_number');
            date_default_timezone_set('Asia/Kolkata');
            $now = date('Y-m-d H:i:s');

            $update_Id = $this->BankModel->update_data($id, array(
                'acc_holdr_name' => $acc_holdr_name,
                'userid'         => $userid,
                'bank_name'		 => $bank_name,
                'acc_no'		 => $acc_no,
                'ifsc'			 => $ifsc,
                 'amount_in_words'=> $amount_in_words,
                 'amount_in_number'=> $amount_in_number,
                'updated_at'	 => $now,
            ));

            if(!empty($update_Id) || $update_Id != '' || $update_Id != 0)  {
                session()->setFlashdata('message', 'Updated Successfully!');
                session()->setFlashdata('alert-class', 'alert-success');
                return $this->response->redirect(site_url('bankList'));
            } else {
                session()->setFlashdata('message', 'Do not Update!');
                session()->setFlashdata('alert-class', 'alert-danger');
                return $this->response->redirect(site_url('bankList'));
            }
        } else {
            $data['validation'] = $this->validator;
            $userid	= session()->get('id');
            $data['bank'] = $this->BankModel->get_single_data($id);
            echo view('editBank', $data);
        }
    }

    //Delete Bank Details
    public function deleteBank($bankid)
    {
        if(session()->has('id'))
        {
            $delete_Id = $this->BankModel->update_data($bankid, array(
                'status' => 2,
            ));
            if(!empty($delete_Id) || $delete_Id != '' || $delete_Id != 0)  {
                session()->setFlashdata('message', 'Deleted Successfully!');
                session()->setFlashdata('alert-class', 'alert-danger');
                return $this->response->redirect(site_url('bankList'));
            } else {
                session()->setFlashdata('message', 'Do not Delete!');
                session()->setFlashdata('alert-class', 'alert-danger');
                return $this->response->redirect(site_url('bankList'));
            }
            //return view('deleteBank');
        } else {
        return redirect()->to('/');
        }
    }

    public function fileUpload(){
        $db = db_connect();
		$this->BankModel = new BankModel($db);
        $bankid = $this->request->getPost('id');
        $data = $this->BankModel->get_single_data($bankid);
        print_r(json_encode($data));
        //return $this->response->setJSON($data);
        //exit();
     }
}
