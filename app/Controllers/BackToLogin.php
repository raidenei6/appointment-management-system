<?php

namespace App\Controllers;

class BackToLogin extends BaseController
{
    public function btl(): string
    {
        return view('home');

    }
}