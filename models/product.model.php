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

    public function UpdateProduct(string $name, string $description, float $price, string $image, int $prodId): void
    {
        try {
            $sql = $this->pdo->prepare("UPDATE products SET name = ?, description = ?, price = ?, image = ? WHERE ID = ?");

            $sql->execute([$name, $description, $price, $image, $prodId]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function DeleteProduct(int $prodId): void
    {
        try {
            $sql = $this->pdo->prepare("DELETE FROM products WHERE ID = ?");

            $sql->execute([$prodId]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }
}