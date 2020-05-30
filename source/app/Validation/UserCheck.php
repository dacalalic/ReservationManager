<?php namespace App\Validation;

use App\Models\UserModel;

class UserCheck {
    
    public function val_pass(string $str, string $fields, array $data):bool {
        $model = new UserModel();
        $user = $model->where("UserName", $data["username"])
                          ->first();
        return password_verify($data["password"], $user["Password"]);
    }
    
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