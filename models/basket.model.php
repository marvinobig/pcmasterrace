<?php

class Basket
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function AddToBasket(int $prodId, string $username): void
    {
        try {
            $sql = $this->pdo->prepare("INSERT INTO basket(ProdID, username) VALUES (?, ?)");

            $sql->execute([$prodId, $username]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function LoadBasket(string $username): array
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM basket JOIN products ON basket.prodID = products.ID WHERE basket.username= ?");

            $result = $sql->execute([$username]);

            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function RemoveFromBasket(int $id): void
    {
        try {
            $sql = $this->pdo->prepare("DELETE FROM basket WHERE prodID = ?");

            $result = $sql->execute([$id]);
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }
}