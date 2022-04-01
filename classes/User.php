<?php


class User
{
    private $id;
    private $name;
    private $username;
    private $email;
    private $password;
    private $db;

    public function __construct($name, $username, $email, $password)
    {
        $this->id = 'null';
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
        $this->db = new Database();
    }

    public function addUserToDatabase()
    {
        $sql = "INSERT INTO users VALUES(:id, :name, :username, :email, :password)";
        $values = array(
            array(":id", null),
            array(":name", $this->name),
            array(":username", $this->username),
            array(":email", $this->email),
            array(":password", $this->password)
        );
        $this->db->execute();
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        return $this->db->getAll($sql);
    }


}