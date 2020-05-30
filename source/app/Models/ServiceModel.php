<?php namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model{
    protected $table = "service";
    protected $primaryKey = "SerId";
    
    protected $allowedFields = ["Name", "Description", "Type", "Draft", "NumOfPoints", "UserName"];
    
    public function getAllServicesWithType($type){
         return $this->where("Type", $type)
                ->findAll();
    }
}