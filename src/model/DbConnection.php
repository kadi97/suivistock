<?php
namespace base;

class DbConnection{
    private $host = 'localhost';
    private $mysqlUser = 'root';
    private $password ='';
    private $dbname ='boutique';
    

    function __construct()
    {

    }
    
    public function getConnection()
    {
        try {
                 $db =  $db = new \PDO('mysql:host='. $this->host.';dbname='.$this->dbname,$this->mysqlUser,$this->password,
                [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING]);
        } catch (\PDOException $ex) {
            die("error : ".$ex->getMessage());
        }
        return $db;
    }

}