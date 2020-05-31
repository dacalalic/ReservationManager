<?php

namespace App\Validation;

use App\Models\UserModel;

class ServiceCheck {

    public function val_type(string $str): bool {
        if($str == "default") {
            return false;
        }
        else {
            return true;
        }
    }

}
