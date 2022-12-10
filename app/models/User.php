<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findUserByEmail($email)
    {
        $this->db->query("SELECT * FROM user WHERE email = :email");
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function signup($data)
    {
        $this->db->query("INSERT INTO user (name,phone,birthday,email,password,role) VALUES(:name, :phone, :birthday, :email, :password, :role)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':birthday', $data['birthday']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password)
    {
        $this->db->query("SELECT * FROM user WHERE email = :email");
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function getClients()
    {
        $this->db->query("SELECT COUNT(*) as clients FROM user WHERE role = 1;");
        $row = $this->db->single();
        return $row;
    }

    public function faithfulClients()
    {
        $this->db->query("SELECT user.name,COUNT(selling.user_id) as clients FROM user INNER JOIN selling WHERE user.id = selling.user_id GROUP BY selling.user_id ORDER BY clients DESC");
        return $this->db->resultSet();
    }
}
