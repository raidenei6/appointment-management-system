<?php

namespace App\Controllers;

class BackToForm extends BaseController
{
    public function btk(): string
    {
        return view('form');
    }
}