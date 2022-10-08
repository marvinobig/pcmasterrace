<?php 

class DBConnection() 
{
    public static function make(array $config) : PDO 
    {
        try 
        {
            $pdo = new PDO(
                "{$config['connection']}dbname={$config['name']}",
                $config['username'],
                $config['password'],
                $config['options']
            );

            echo "<p>Connection to database successful.</p>";

            return $pdo;
        } 
        catch (PDOException $e) 
        {
            die("<p>{$e->getMessage()}</p>");
        }
    }
}