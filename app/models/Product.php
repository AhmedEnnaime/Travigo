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
}
