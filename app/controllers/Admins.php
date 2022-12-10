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
        $expensive = $this->productModel->getExpensive();
        $productCount = $this->productModel->getProductsCount();
        $sold = $this->productModel->soldProducts();
        $earnings = $this->productModel->getEarnings();
        $selledPack = $this->productModel->getMostPackSelled();
        $clients = $this->userModel->faithfulClients();
        $data = [
            'products' => $products,
            'users' => $users,
            'expensive' => $expensive,
            'total' => $productCount,
            'sold' => $sold,
            'earnings' => $earnings,
            'selledPack' => $selledPack,
            'clients' => $clients,

        ];
        $this->view('dashboard', $data);
    }
}
