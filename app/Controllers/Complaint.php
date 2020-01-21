<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\complaintModel;
use App\Models\binModel;
use App\Models\userModel;

class Complaint extends Controller
{
        public function index()
        {
            $db      = \Config\Database::connect();

            $builder=$db->table('complaint');

            $builder->select('*');
            $builder->join('users', 'users.id = complaint.user_id');
            $query = $builder->get();
            
            $data['complaints'] = $query->getResult('array');
            
            return view('complaint/view',$data);
            
            
        }
        public function create()
        {
            $model = new binModel();
            $data['places'] = $model->findAll();
            
            return view('complaint/create',$data);
        }
        public function store()
        {
            $session = \Config\Services::session($config);
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
                $place = $model->find($_POST['place']);
                $data = [
                    'place' => $place['destination'],
                    'complaint'    => $_POST['complaint'],
                    'user_id' => $_SESSION['id']
                ];
                if($complaintModel->insert($data)){

                    $_SESSION['success'] = 'Complaint Created';
                    $session->markAsFlashdata('success');
                    
                    $model = new complaintModel();
                    $data['complaints'] = $model->findAll();

                    return redirect('complaint',$data);
                }

            }
        }
}