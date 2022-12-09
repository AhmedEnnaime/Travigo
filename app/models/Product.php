<?php

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProducts()
    {
        $this->db->query("SELECT * FROM product");
        return $this->db->resultSet();
    }

    public function getThree()
    {
        $this->db->query("SELECT * FROM product LIMIT 3");
        return $this->db->resultSet();
    }

    public function addProduct($data)
    {
        $this->db->query("INSERT INTO product (title,destination,media,description,price,user_id,date_depart,places_availables) values(:title,:destination,:media,:description,:price,:user_id,:date_depart,:places_availables)");
        $this->db->bind(":title", $data['title']);
        $this->db->bind(":destination", $data['destination']);
        $this->db->bind(":media", $data['media']);
        $this->db->bind(":description", $data['description']);
        $this->db->bind(":price", $data['price']);
        $this->db->bind(":user_id", $data['user_id']);
        $this->db->bind(":date_depart", $data['date_depart']);
        $this->db->bind(":places_availables", $data['places_availables']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
