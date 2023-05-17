<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\BankModel;

class Home extends BaseController
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
    public function signup()
    {
        return view('signup');
    }
    public function depositSlip()
    {
        if(session()->has('id'))
        {
            if($this->request->getPost('bank')) {               
                $bank = $this->BankModel->get_single_data($this->request->getPost('bank'));  
                
                $data['acc_holdr_name']	= $bank[0]['acc_holdr_name'];
                $data['bank_name']	= $bank[0]['bank_name'];
                $data['acc_no']   = $bank[0]['acc_no'];
                $data['branch']   = $this->request->getPost('branch');
                $data['amount_in_words']   = $bank[0]['amount_in_words'];
                $data['amount_in_number']   = $bank[0]['amount_in_number']; ;
                // $data['amount']   = $this->request->getPost('amount');
                return view('depositSlip', $data);
            } else {
                $data['acc_holdr_name']	="";
                $data['bank_name']	= "Urja Patsanstha";
                $data['acc_no']   = "";
                $data['branch']   = "";
                $data['amount_in_words']   = "";
                $data['amount_in_number']   = "";
                // $data['amount']   = "";
                return view('depositSlip', $data);
            }
        } else {
            return redirect()->to('/');
        }
    }
    
    public function generateDeptSlip()
    {
        if(session()->has('id'))
        {
            $userid	= session()->get('id');
            $data['bank'] = $this->BankModel->get_all_data($userid);  
            return view('generateDeptSlip', $data);
        }
    }
    public function dashboard()
    {
        if(session()->has('id'))
        {
            $userid	= session()->get('id');
            $data['bankdtl'] = $this->BankModel->get_all_data($userid);  
            return view('index', $data);
        } else {
            return redirect()->to('/');
        }
    }

    //Bank Details
    public function bankList()
    {
        if(session()->has('id'))
        {
            $userid	= session()->get('id');
            $data['bankdtl'] = $this->BankModel->get_all_data($userid);  
            return view('bankList', $data);
        } else {
        return redirect()->to('/');
        }
    }
    public function addBank()
    {
        if(session()->has('id'))
        {
            return view('addBank');
        } else {
            return redirect()->to('/');
            }
    }

     //Edit Bank Details
     public function editBank($bankid)
     {
         if(session()->has('id'))
         {
             $data['bank'] = $this->BankModel->get_single_data($bankid);  
             return view('editBank', $data);
         } else {
         return redirect()->to('/');
         }
     }

    
     
}
