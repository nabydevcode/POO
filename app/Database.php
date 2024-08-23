<?php
namespace App\app;
use \PDO;
class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_host = 'localhost', $db_pass = '', $db_user = 'root')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;

    }
    private function getPDO()
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=testdb;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
    public function query($statement, $classname)
    {
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $classname);
        return $datas;
    }
    public function prepare($statement, $attributes, $class_name, $one = false)
    {
        $db = $this->getPDO()->prepare($statement);
        $db->execute($attributes);
        $db->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $datas = $db->fetch();
        } else {
            $datas = $db->fetchAll();
        }
        return $datas;
    }
}

