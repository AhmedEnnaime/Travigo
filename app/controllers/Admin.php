<?php

class Admin extends Controller
{

    public function __construct()
    {
    }

    public function dashboard()
    {
        $this->view('dashboard');
    }

    public function add()
    {
        $this->view('add');
    }
}
