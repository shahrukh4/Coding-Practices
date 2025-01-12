<?php

// High-level class
class UserService
{
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function findUserByEmail($email)
    {
        return $this->db->findUserByEmail($email);
    }
}

// Abstraction
interface DatabaseInterface
{
    public function findUserByEmail($email);
}

// Low-level classes
class MysqlDatabase implements DatabaseInterface
{
    public function findUserByEmail($email)
    {
        // Mysql implementation
    }
}

class PostgresqlDatabase implements DatabaseInterface
{
    public function findUserByEmail($email)
    {
        // Postgresql implementation
    }
}

class SqliteDatabase implements DatabaseInterface
{
    public function findUserByEmail($email)
    {
        // Sqlite implementation
    }
}

// Usage
$userService = new UserService(new MysqlDatabase());
$user = $userService->findUserByEmail('user@example.com');
