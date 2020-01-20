<?php namespace App\Models;

use CodeIgniter\Model;

class complaintModel extends Model
{
        protected $table      = 'complaint';
        protected $primaryKey = 'id';

        protected $returnType = 'array';

        protected $allowedFields = ['place', 'complaint'];



        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

}