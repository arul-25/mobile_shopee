<?php

namespace App\Repository;

class RepositoryProduct
{
    private $db = null;

    public function __construct(\PDO $db)
    {
        if (!isset($db)) return null;
        $this->db = $db;
    }

    public function getData()
    {
        $this->db->query("SELECT * FROM product");
    }
}
