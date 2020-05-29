<?php namespace App\Validation;
/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* UserCheck – klasa za proveru korisnika
*
* @version 1.0
*/

use App\Models\UserModel;

class UserCheck {
    
    /**
* val_pass funkcija proverava password
*
* @param string $str,string $fields,array $data
*
* @return bool
*
*/
    
    public function val_pass(string $str, string $fields, array $data):bool {
        $model = new UserModel();
        $user = $model->where("UserName", $data["username"])
                          ->first();
        return password_verify($data["password"], $user["Password"]);
    }
    
/**
* val_username funkcija proverava postojanje usera
*
* @param string $str 
*
* @return bool
*
*/
    
    public function val_username(string $str): bool {
        $model = new UserModel();
        $user = $model->where("UserName", $str)
                          ->first();
        
        if(!$user){
            return false;
        }
        return true;
    }
}