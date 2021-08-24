<?php

class Database
{
    private string $server = 'localhost';
    private string $DBName = 'dailychallenge';
    private string $username = 'root';
    private string $password = '';
    private static ?PDO $DBInstance = null;

    /* Database constructor for connect to database. */
    public function __construct() {
        try {
            self::$DBInstance = new PDO("mysql:host=$this->server;dbname=$this->DBName;charset=utf8", $this->username, $this->password);
            self::$DBInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$DBInstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $exception) {
            echo "Erreur de connexion: ". $exception->getMessage();
        }
    }

    /* Get instance of database */
    public static function getInstance(): ?PDO {
        if (self::$DBInstance === null) {
            new self();
        }
        return self::$DBInstance;
    }

}