<?php

namespace App\Controllers;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function register()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        // $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);


        $userModel = new UserModel();

        // Save data
        $userModel->save([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        return view('success');
    }
}
