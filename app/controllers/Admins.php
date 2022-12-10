<?php

class Admins extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->productModel = $this->model('Product');
        $this->userModel = $this->model('User');
    }

    public function dashboard()
    {
        $products = $this->productModel->getProducts();
        $users = $this->userModel->getClients();
        $data = [
            'products' => $products,
            'users' => $users,

        ];
        $this->view('dashboard', $data);
    }
}
