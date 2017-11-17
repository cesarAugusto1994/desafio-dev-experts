<?php

class Connection
{
    private static $storage;

    public function __construct($host, $db, $user, $password)
    {
        $this->storage = new Storage($host, $db, $user, $password);
    }

    public function getConnection()
    {
        return $this->storage;
    }

    public static function getInstance()
    {
        return self::$storage;
    }
}