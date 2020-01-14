<?php namespace App\Models;

use CodeIgniter\Model;

class binModel extends Model
{
        protected $table      = 'complaint';
        protected $primaryKey = 'id';

        protected $returnType = 'array';

        protected $allowedFields = ['place', 'complaint'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

}