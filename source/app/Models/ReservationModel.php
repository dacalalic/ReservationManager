<?php namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model{
    protected $table = "reservation";
    protected $primaryKey = "ResId";
    
    protected $allowedFields = ["Time", "PointId", "UserName"];
}