<?php

namespace App\Controllers;

use App\Models\UserAccountModel;

class LoginController extends BaseController
{
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserAccountModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set session
            session()->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'isLoggedIn' => true
            ]);

            return view('home'); // Or redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}
