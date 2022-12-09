<?php

class Products extends Controller
{

    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'destination' => trim($_POST['destination']),
                'media' => $_FILES['media']['name'],
                'date_depart' => trim($_POST['date_depart']),
                'price' => trim($_POST['price']),
                'user_id' => $_SESSION['id'],
                'places_availables' => trim($_POST['places_availables']),
                'description' => trim($_POST['description']),
                'title_err' => '',
                'destination_err' => '',
                'media_err' => '',
                'date_depart_err' => '',
                'price_err' => '',
                'places_availables_err' => '',
                'description_err' => '',
            ];

            // Validation Form
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }

            if (empty($data['destination'])) {
                $data['destination_err'] = 'Please enter destination';
            }

            if (empty($data['media'])) {
                $data['media_err'] = 'Please enter media';
            }

            if (empty($data['date_depart'])) {
                $data['date_depart_err'] = 'Please enter depart date';
            }

            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter price';
            }

            if (empty($data['places_availables'])) {
                $data['places_availables_err'] = 'Please enter available places';
            }

            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter description';
            }
            //die(print_r($data));
            if (empty($data['title_err']) && empty($data['destination_err']) && empty($data['media_err']) && empty($data['date_depart_err']) && empty($data['price_err']) && empty($data['places_avalables_err']) && empty($data['description_err'])) {

                if ($this->productModel->addProduct($data)) {
                    flash('register_success', 'Travel added successfully');
                    redirect('admins/dashboard');
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'destination' => '',
                'media' => '',
                'date_depart' => '',
                'price' => '',
                'user_id' => '',
                'places_availables' => '',
                'description' => '',
                'title_err' => '',
                'destination_err' => '',
                'media_err' => '',
                'date_depart_err' => '',
                'price_err' => '',
                'places_availables_err' => '',
                'description_err' => '',
            ];
            $this->view('add');
        }
    }
}
