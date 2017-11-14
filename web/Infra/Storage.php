<?php

class Storage
{
    private $host;
    private $db;
    private $user;
    private $password;

    /**
     * Storage constructor.
     * @param $host
     * @param $db
     * @param $user
     * @param $password
     */
    public function __construct($host, $db, $user, $password)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }


    public function factory()
    {
        return new PDO("pgsql:host={$this->host};port=5432;dbname={$this->db};user={$this->user};password={$this->password}");
    }
}