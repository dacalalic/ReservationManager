<?php

/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* Serviceviewer – klasa za usluge
*
* @version 1.0
*/

namespace App\Controllers;

use App\Models\ServiceModel;

class Serviceviewer extends BaseController {

/**
* allServices funkcija prikazuje sve usluge
* 
* @return void
*
*/
    public function allServices() {
        if (session()->isLoggedIn) {
            echo view("templates/user_header");
        } else {
            echo view("templates/guest_header");
        }

        $model = new ServiceModel();
        $data["services"] = $model->findAll();
        echo view("service/all_ser", $data);
        echo view("templates/footer");
    }

/**
* specTypeSer funkcija prikazuje odredjen tip usluge
* 
* @return void
*
*/    
    
    public function specTypeSer() {
        $type = $this->request->getVar("type");
        $model = new ServiceModel();
        $data = [];
        $data["services"] = $model->getAllServicesWithType($type);
        $data["type"] = $type;
        if (session()->isLoggedIn) {
            echo view("templates/user_header");
        } else {
            echo view("templates/guest_header");
        }
        echo view("service/spec_type_ser", $data);
        echo view("templates/footer");
    }

/**
* singleService funkcija prikazuje jednu uslugu
* 
* @return void
*
*/
    public function singleService() {
        $model = new ServiceModel();
        $data = [];
        $service = $model->where("SerId", $this->request->getVar("id"))
                ->first();
        $data["name"] = $service["Name"];
        $data["desc"] = $service["Description"];
        $data["draft"] = $service["Draft"];
        $data["type"] = $service["Type"];
        $data["numofpoints"] = $service["NumOfPoints"];
        $data["serId"] = $this->request->getVar("id");

        if (session()->isLoggedIn) {
            echo view("templates/user_header");
        } else {
            echo view("templates/guest_header");
        }
        echo view("service/single_service", $data);
        echo view("templates/footer");
    }

}
