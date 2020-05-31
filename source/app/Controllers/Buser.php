<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\PointModel;

class Buser extends User {

    public function createService() {
        helper(["form"]);

        if ($this->request->getMethod() == "post") {
            $rules = [
                "name" => "required",
                "type" => "val_type",
                "numofpoints" => "required",
            ];
            $errors = [
                "type" => [
                    "val_type" => "Select type of service.",
                ],
            ];
            if ($this->validate($rules, $errors)) {
                
                $data = [
                    "Name" => $this->request->getVar("name"),
                    "Description" => $this->request->getVar("description"),
                    "Type" => $this->request->getVar("type"),
                    "NumOfPoints" => $this->request->getVar("numofpoints"),
                    "UserName" => session()->username,
                ];
                
                if ($this->request->getFile("draft") != "") {
                    $data["Draft"] = file_get_contents($this->request->getFile("draft")->getTempName());
                }
                
                $model = new ServiceModel();
                $model->insert($data);
                
                $ser = $model->selectMax("SerId")->first();
                
                $model = new PointModel();
                for($i = 0; $i < $data["NumOfPoints"]; $i++){
                    $model->insert(["SerId" => $ser]);
                }                              
                
                return redirect()->to("/user");
            } else {
                echo view("templates/user_header");
                echo view("buser/create_service_form", ["validation" => $this->validator]);
                echo view("templates/footer");
            }
        } else {
            echo view("templates/user_header");
            echo view("buser/create_service_form");
            echo view("templates/footer");
        }
    }

}
