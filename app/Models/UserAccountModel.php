<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAccountModel extends Model
{
    protected $table = 'user_account';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password'];
}
