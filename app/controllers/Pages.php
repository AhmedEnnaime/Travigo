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

    public function package()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'user_id' => $_SESSION['id'],
                'product_id' => $_POST['product_id'],
            ];
            if ($this->productModel->sell($data)) {
                flash("buy_success", "Pack buyed successfully");
                redirect('pages/package');
            } else {
                die("Something went wrong");
            }
        } else {
            $products = $this->productModel->getProducts();
            $data = [
                'products' => $products,
            ];
            $this->view('package', $data);
        }
    }
}
