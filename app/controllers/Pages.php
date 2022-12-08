<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('index');
    }

    public function about()
    {
        $this->view('about');
    }

    public function login()
    {
        $this->view('login');
    }

    public function signup()
    {
        $this->view('signup');
    }

    public function package()
    {
        $this->view('package');
    }
}
