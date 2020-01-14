<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\complaintModel;
use App\Models\binModel;

class Complaint extends Controller
{
        public function index()
        {
            return view('complaint/create');
        }
        public function create()
        {
            $model = new binModel();
            $data['places'] = $model->findAll();
            
            return view('complaint/create',$data);
        }
        public function store()
        {
            helper('form','session');
            $complaintModel = new complaintModel();
            $model = new binModel();
            $data['places'] = $model->findAll(); 

            if (! $this->validate([
                'place' => 'required',
                'complaint'  => 'required|min_length[3]|max_length[255]'
            ]))
            {
                
                return view('complaint/create',$data);
            }
            else
            {
                $data = [
                    'place' => $_POST['place'],
                    'complaint'    => $_POST['complaint']
                ];
                if($complaintModel->insert($data)){
                    $session = \Config\Services::session($config);

                    $_SESSION['success'] = 'Complaint Created';
                    $session->markAsFlashdata('success');
                    
                    echo view('complaint/create',$data);
                }

            }
        }
}