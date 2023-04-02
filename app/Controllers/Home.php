<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function crud()
    {
        return view('welcome_message');
    }
}
