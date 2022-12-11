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
        $products = $this->productModel->getProducts();
        $data = [
            'products' => $products,
        ];
        $this->view('package', $data);
    }

    public function buy($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = $this->productModel->getProductById($id);
            $data = [
                'product_id' => $id,
                'email' => $_SESSION['email'],
                'name' => $_SESSION['name'],
                'user_id' => $_SESSION['id'],
                'destination' => $product->destination,
                'places' => trim($_POST['places']),
                'places_err' => '',

            ];
            if (empty($data['places'])) {
                $data['places_err'] = 'Please enter the number of places you want to book';
            }
            if (empty($data['places_err'])) {
                if ($this->productModel->sell($data)) {
                    flash("buy_success", "Pack buyed successfully");
                    redirect('pages/package');
                } else {
                    echo '<span">Not enough places left</span>';
                }
            } else {
                $this->view('buy', $data);
            }
        } else {
            $product = $this->productModel->getProductById($id);
            $data = [
                'product_id' => $id,
                'email' => $_SESSION['email'],
                'name' => $_SESSION['name'],
                'user_id' => $_SESSION['id'],
                'destination' => $product->destination,
                'places' => $_POST['places'],
                'places_err' => '',
            ];

            $this->view('buy', $data);
        }
    }
}
