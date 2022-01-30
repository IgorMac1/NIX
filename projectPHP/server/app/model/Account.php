<?php

namespace app\model;
use core\Model;

class Account extends Model
{

    public function addNewUser(array $data): void
    {
        $params = [
            'name' => strtolower($data['name']),
            'surname' => strtolower($data['surname']),
            'email' => strtolower($data['email']),
            'pass' => md5($data['pass']),
        ];
        $this->db->query(
            "INSERT INTO users (name,surname,email,pass) VALUES (:name,:surname,:email,:pass)",
            $params
        );
    }

    public function getUser($email, $pass)
    {
        $params = [
            'email' => strtolower($email),
            'pass'  => md5($pass)
        ];
        return $this->db->row("SELECT id, name FROM users WHERE email = :email AND pass = :pass", $params);
    }
}




