<?php

namespace App\Controllers;

class LogoutController extends BaseController
{
    public function logout()
    {
        session()->destroy();
        return view("form");
    }

}
// session()->destroy();
// return redirect()->to('<?= base_url('/') 
//?
//>
//'
//)
//;