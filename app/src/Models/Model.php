<?php

namespace App\Models;

use PDO;

use App\Core\Mysql;

abstract class Model
{

    protected pdo $mysql;
    protected string $tableName;

    public function __construct()
    {
        $this->mysql = mysql::getDb();
    }
}
