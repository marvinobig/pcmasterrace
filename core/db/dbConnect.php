<?php

class DBConnection
{
    public static function make(array $config): PDO
    {
        try
        {
            $pdo = new PDO(
                "{$config['connection']}dbname={$config['name']}",
                $config['username'],
                $config['password'],
                $config['options']
            );

            return $pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}