<?php

namespace App\Models;

use CodeIgniter\Model;

class crudmodel extends Model
{
    protected $table ='details';
    protected $primarykey ='id';
    protected $allowedFields =[
        'name',
        'roll',
    ];
}