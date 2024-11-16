<?php

namespace App\Controllers;

class Resume extends BaseController
{
    public function index(): string
    {
        return view('Resume/index');
    }
}
