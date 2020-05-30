<?php

namespace App\Controllers;

use App\Models\UserModel;

class Guest extends BaseController {

    public function index() {
        //Display home page for guest
        helper(["url"]);
        echo view("templates/guest_header");
        echo view("templates/middle");
        echo view("templates/footer");
    }

    public function login() {
        if ($this->request->getMethod() == "post") {
            //Log in logic
            helper(["form", "url"]);

            $rulesUser = [
                "username" => "val_username"
            ];
            $errorsUser = [
                "username" => [
                    "val_username" => "Wrong username!",
                ]
            ];

            if ($this->validate($rulesUser, $errorsUser)) {
                $rulesPass = [
                    "password" => "val_pass[username]"
                ];
                $errorsPass = [
                    "password" => [
                        "val_pass" => "Wrong password!",
                    ]
                ];

                if ($this->validate($rulesPass, $errorsPass)) {
                    $model = new UserModel();
                    $user = $model->where("UserName", $this->request->getVar("username"))->first();
                    $this->setSession($user["Type"]);
                    return redirect()->to("/user");
                }
            }
            echo view("guest/login_screen", ["validation" => $this->validator]);
            return;
        }
        echo view("guest/login_screen");
    }

    public function signin() {
        if ($this->request->getMethod() == "post") {
            //Sign in logic
            helper(["form"]);

            $rules = [
                "username" => "required|is_unique[user.UserName]",
                "email" => "valid_email|is_unique[user.Email]",
                "password" => "required|min_length[6]",
                "passconfirm" => "matches[password]",
            ];

            if ($this->validate($rules)) {
                //Sign in user
                $user = [
                    "UserName" => $this->request->getVar("username"),
                    "Email" => $this->request->getVar("email"),
                    "Password" => password_hash($this->request->getVar("password"), PASSWORD_DEFAULT),
                ];

                $model = new UserModel();
                $model->insert($user);
                
                $this->setSession(false);
                return redirect()->to("/user");
            } else {
                echo view("guest/signin_screen", ["validation" => $this->validator]);
            }
        } else {
            echo view("guest/signin_screen");
        }
    }
    
    private function setSession($userType) {
        $data = [
            "username" => $this->request->getVar("username"),
            "isLoggedIn" => true,
            "type" => $userType,
        ];
        session()->set($data);
    }

}
