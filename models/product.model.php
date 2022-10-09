<?php

class Product
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function PostProduct(string $name, string $description, float $price, string $image): void
    {
        try {
            $sql = $this->pdo->prepare("INSERT INTO products(name, description, price, image) VALUES (?, ?, ?, ?)");

            $sql->execute([$name, $description, $price, $image]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function GetAllProducts(): array
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM products");

            $result = $sql->execute();

            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function GetProductById(int $id): array
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM products WHERE ID = ?");

            $result = $sql->execute([$id]);

            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }
}