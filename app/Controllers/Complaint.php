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
            
        }
}