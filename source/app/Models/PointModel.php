<?php namespace App\Models;

/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* PointModel – model klasa za Point
*
* @version 1.0
*/


use CodeIgniter\Model;

class PointModel extends Model{
 /**
 * @var string $table point
 */
    protected $table = "point";
 /**
 * @var string $primaryKey PointId
 */
    protected $primaryKey = "PointId";
 /**
 * @var array $allowedFields ["SerId"]
 */
    protected $allowedFields = ["SerId"];
}