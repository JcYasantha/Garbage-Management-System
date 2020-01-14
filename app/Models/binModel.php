<?php namespace App\Models;

use CodeIgniter\Model;

class binModel extends Model
{
      
        protected $table      = 'bin';
        protected $primaryKey = 'id';

        protected $returnType = 'array';

        protected $allowedFields = ['city', 'destination', 'best_route', 'driver_id'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

        public function get_insert($Formarray)
        {
           $db  = \Config\Database::connect();
           $query = $db->table('bin');
           $data = [
               'city' => $Formarray['city'],
               'destination'  => $Formarray['destination'],
               'best_route'  => $Formarray['best_route']
            ];     

           if($query->insert($data)){
               echo view('dustbin/create');
           }else{

           }
        }
}