<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ReservationModel;

class User extends BaseController {

    public function index() {
        helper("url");
        
        $model = new ReservationModel();
        
        $data["reservations"] = $model->where("UserName", session()->username)->findAll();
        
        $model = new \App\Models\PointModel();
        $modelSer = new \App\Models\ServiceModel();
        $data["services"] = [];
                
        for($i = 0; $i < count($data["reservations"]); $i++){
            $pointId = $data["reservations"][$i]["PointId"];
            $point = $model->where("PointId", $pointId)->first();
            $serviceId = $point["SerId"];
            $service = $modelSer->where("SerId", $serviceId)->first();
            $data["services"][] = $service["Name"];
            
            $points = $model->where("SerId", $serviceId)->orderBy("PointId", "ASC")->findAll();
            $tempPoints = [];
            for($j = 0; $j < count($points); $j++){
                $tempPoints[] = $points[$j]["PointId"];
            }

            $data["reservations"][$i]["PointId"] = array_search($data["reservations"][$i]["PointId"], $tempPoints) + 1;
        }
        
        $data["reservations"] = array_reverse($data["reservations"]);
        $data["services"] = array_reverse($data["services"]);
        
        echo view("templates/user_header");
        echo view("user/user_reservations", $data);
        echo view("templates/footer");
    }

    public function logout() {
        session()->destroy();
        return redirect()->to("/");
    }

    public function changePass() {
        if ($this->request->getMethod() == "post") {
            //Change password logic
            helper(["form", "url"]);

            $rules = [
                "password" => "required|min_length[6]",
                "passconfirm" => "matches[password]",
            ];

            if ($this->validate($rules)) {

                $model = new UserModel();
                $username = session()->username;
                $data = ["Password" => $this->request->getVar("password")];
                $model->update($username, $data);

                echo view("templates/user_header");
                echo view("templates/success");
                echo view("templates/footer");
            } else {
                echo view("templates/user_header");
                echo view("user/pass_change", ["validation" => $this->validator]);
                echo view("templates/footer");
            }
        } else {
            echo view("templates/user_header");
            echo view("user/pass_change");
            echo view("templates/footer");
        }
    }

    public function upgradeToBusiness() {
        helper("url");
        if ($this->request->getMethod() == "post") {
            if ($this->request->getVar("question") == "yes") {
                $model = new UserModel();
                $data = ["Type" => true];
                $model->update(session()->username, $data);
                session()->set(["type" => true]);
            }
            return redirect()->to("/user");
        } else {
            echo view("templates/user_header");
            echo view("user/upgrade_business");
            echo view("templates/footer");
        }
    }

    public function createReservation() {
        $time = $this->request->getVar("time");
        $date = $this->request->getVar("date");
        
        $dateTime = \DateTime::createFromFormat("Y-m-d H:i", $date." ".$time);
        
        $model = new \App\Models\PointModel();
        $points = $model->where("SerId", $this->request->getVar("serId"))->orderBy("PointId", "ASC")->findAll();
        
        $model = new ReservationModel();
        $reservations = $model->where("PointId", $points[$this->request->getVar("pointId")]["PointId"])->findAll();
        
        for($i = 0; $i < count($reservations); $i++){
            $dateTimeTemp = new \DateTime();
            $dateTimeTemp->setTimestamp($reservations[$i]["Time"]);
            
            if($dateTimeTemp >= $dateTime){
                $dateTimeTemp->sub(new \DateInterval("PT2H"));
                if($dateTimeTemp < $dateTime){
                    echo view("reservation/failure");
                    return;
                }
            }
            else{
                $dateInt = new \DateInterval("PT2H");
                $dateTimeTemp->add($dateInt);
                if($dateTimeTemp > $dateTime){
                    echo view("reservation/failure");
                    return;
                }
            }
        }
        
        $data = [
            "Time" => $dateTime->getTimestamp(),
            "PointId" => $points[$this->request->getVar("pointId")]["PointId"],
            "UserName" => session()->username,
        ];
        
        $model->insert($data);
        echo view("reservation/success");
    }

}
