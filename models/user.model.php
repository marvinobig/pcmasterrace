<?php

class User
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function PostUser(string $username, string $email, string $password): void
    {
        try {
            $sql = $this->pdo->prepare("INSERT INTO users(username, email, password) VALUES (?, ?, ?)");

            $sql->execute([$username, $email, $password]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function GetUser(string $username, string $password): array
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");

            $result = $sql->execute([$username, $password]);

            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function DeleteUserById(int $id): void
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM users WHERE ID = ?");

            $sql->execute([$id]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function UpdateUserPass(string $password, string $username): void
    {
        try {
            $sql = $this->pdo->prepare("UPDATE users SET password = ? WHERE username = ?");

            $sql->execute([$password, $username]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }
}