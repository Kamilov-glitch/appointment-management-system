<?php


class Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=appointments", "project_admin", "abcd");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function execute($sql, $pholder, $value)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue($pholder, $value);
        $stmt->execute();
    }

    public function getOne($sql, $pholder, $value)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue($pholder, $value);
        return $stmt->fetch();
    }

    public function getAll($sql, $pholder, $value)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue($pholder, $value);
        return $stmt->fetchAll();
    }


}