<?php namespace App\Models;

use CodeIgniter\Model;

class PointModel extends Model{
    protected $table = "point";
    protected $primaryKey = "PointId";
    
    protected $allowedFields = ["SerId"];
}