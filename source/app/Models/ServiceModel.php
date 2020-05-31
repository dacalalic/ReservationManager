<?php namespace App\Models;

/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* ServiceModel – model klasa za usluge
*
* @version 1.0
*/


use CodeIgniter\Model;

class ServiceModel extends Model{
 /**
 * @var string $table service
 */
    protected $table = "service";
/**
 * @var string $primaryKey SerId
 */    
    protected $primaryKey = "SerId";
    
 /**
 * @var array $allowedFields ["Name", "Description", "Type", "Draft", "NumOfPoints", "UserName"];
 */      
    protected $allowedFields = ["Name", "Description", "Type", "Draft", "NumOfPoints", "UserName"];
    
/**
* getAllServicesWithType dohvata sve usluge
*
* @param string $type
*
* @return void
*
*/
    public function getAllServicesWithType($type){
         return $this->where("Type", $type)
                ->findAll();
    }
}