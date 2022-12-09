<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function index()
    {
        $products = $this->productModel->getThree();
        $data = [
            'products' => $products,
        ];
        $this->view('index', $data);
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
        $products = $this->productModel->getProducts();
        $data = [
            'products' => $products,
        ];
        $this->view('package', $data);
    }
}
