<?php
/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* ServiceCheck – klasa za proveru usluga
*
* @version 1.0
*/

namespace App\Validation;

use App\Models\UserModel;

class ServiceCheck {

/**
* val_type funkcija proverava uslugu
*
* @param string $str 
*
* @return bool
*
*/

    public function val_type(string $str): bool {
        if($str == "default") {
            return false;
        }
        else {
            return true;
        }
    }

}
