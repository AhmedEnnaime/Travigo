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

    public function getProductById($id)
    {
        $this->db->query("SELECT * FROM product WHERE id = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function updateProduct($data)
    {
        $this->db->query("UPDATE product SET title = :title,destination = :destination,media = :media,description = :description,price = :price,user_id = :user_id,date_depart = :date_depart,places_availables = :places_availables WHERE id = :id");
        $this->db->bind(":id", $data['id']);
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

    public function deleteProduct($id)
    {
        $this->db->query("DELETE FROM product WHERE id = :id");
        $this->db->bind(":id", $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
