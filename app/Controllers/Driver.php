<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\driverModel;

class Driver extends Controller
{
        public function index()
        {
            //
        }

        public function create(){
            return view('driver/create');
        }

        public function store(){

            $session = \Config\Services::session($config);
            helper('form','session');
            $model = new driverModel();

            if (! $this->validate([
                'fullname' => 'required',
                'email'  => 'required|valid_email',
                'phone' => 'required|numeric|regex_match[/[0-9]{10}/]',
            ]))
            {
                return view('driver/create');
            }
            else
            {
                $data = [
                    'fullname' => $_POST['fullname'],
                    'email'    => $_POST['email'],
                    'phone' => $_POST['phone']
                ];
                if($model->insert($data)){

                    $_SESSION['success'] = 'Driver Created Successfully';
                    $session->markAsFlashdata('success');
                    
                    return redirect('driver/create');
                }

            }
        }
        

}