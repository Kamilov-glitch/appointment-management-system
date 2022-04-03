<?php

include_once "Database.php";

class Helper
{
    private $db;

    public function __construct()
    {
       $this->db = new Database();
    }

    public function exists($username)
    {
        $sql = "SELECT COUNT(username) FROM users WHERE username = :username";
        $count = $this->db->getAllUsers($sql, ":username", $username);
        return count($count) > 0;
    }

    public function passwordsMatch($pw1, $pw2) {
        return $pw1 === $pw2;
    }

    public function isEmpty($array)
    {
        foreach ($array as $i) {
            if ($i === '') return true;
        }
        return false;
    }

    public function isNotEmpty($array)
    {
        foreach($array as $i) {
            if ($i !== '') return true;
        }
        return false;
    }

    public function isValidLength($field)
    {
        return (strlen($field) > 6 && strlen($field) < 16);
    }

    public function isValidEmail($email)
    {
        $sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return filter_var($sanitized_email, FILTER_VALIDATE_EMAIL);
    }

    public function isSecure($pw)
    {
        if (!preg_match("~[a-z]+~", $pw)) {
            return false;
        }

        if (!preg_match("~[A-Z]+~", $pw)) {
            return false;
        }

        if (!preg_match("~[0-9]+~", $pw)) {
            return false;
        }
        return true;
    }

    public function isValidUsername($username)
    {
        return $this->exists($username);
    }

    public function isValidPassword($username, $pw) {
        $sql = "SELECT password FROM users WHERE username = :username";
        $result = $this->db->getOne($sql, ":username", $username);
        return isset($result['password']) && password_verify($pw, $result['password']);
    }

}