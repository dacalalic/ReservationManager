<?php namespace App\Models;

/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* ReservationModel – model klasa za rezervacije
*
* @version 1.0
*/


use CodeIgniter\Model;

class ReservationModel extends Model{
 /**
 * @var string $table reservation
 */
    protected $table = "reservation";
 /**
 * @var string $primaryKey ResId
 */    
    protected $primaryKey = "ResId";
 /**
 * @var array $allowedFields ["Time", "PointId", "UserName"]
 */    
    protected $allowedFields = ["Time", "PointId", "UserName"];
}