<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = "user";
    protected $primaryKey = "UserName";
    
    protected $allowedFields = ["UserName", "Email", "Password", "Type"];
}