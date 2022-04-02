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
        $sql = "SELECT count(username) FROM users WHERE username = :username";
        $count = $this->db->getAll($sql, ":username", $username);
        return count > 0;
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

    public function isValidLength($field)
    {
        return srtlen($field) > 6 && strlen($field) < 16;
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

}