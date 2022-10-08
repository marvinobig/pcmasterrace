<?php

class User
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function PostUser(string $username, string $email, string $password)
    {
        try {
            $sql = $this->pdo->prepare("INSERT INTO users(username, email, password) VALUES (?, ?, ?)");

            $sql->execute(["$username", "$email", "$password"]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function GetUserById(int $id): array
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM users WHERE ID = ?");

            $result = $sql->execute([$id]);

            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function DeleteUserById(int $id)
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM users WHERE ID = ?");

            $sql->execute([$id]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }
}