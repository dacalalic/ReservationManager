<?php namespace App\Models;

/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* UserModel – model klasa za usera
*
* @version 1.0
*/


use CodeIgniter\Model;

class UserModel extends Model{
 /**
 * @var string $table user
 */
    protected $table = "user";
 /**
 * @var string $primaryKey UserName
 */    
    protected $primaryKey = "UserName";
 /**
 * @var array $allowedFields ["UserName", "Email", "Password", "Type"]
 */      
    protected $allowedFields = ["UserName", "Email", "Password", "Type"];
}