<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\binModel;

class Bin extends Controller
{
        public function index()
        {
            return view('dustbin/create');
        }
        public function create()
        {
            return view('dustbin/create');
        }
        public function store()
        {
            helper('form','session');
            $model = new binModel();

            if (! $this->validate([
                'city' => 'required|min_length[3]|max_length[255]',
                'destination'  => 'required|min_length[3]|max_length[255]',
                'best_route'  => 'required|min_length[3]'
            ]))
            {
                return view('dustbin/create');

            }
            else
            {
                $query = $model->get_insert($_POST);
            }
        }
}