<?php

namespace Parina\Shared\Models;
use Parina\Shared\Infrastructure\Db;
use Parina\Shared\Infrastructure\Adapters\SqliteAdapter;
use Parina\Core\Config;


class User extends BaseModel
{
    protected static string $table = 'users';

    public function __construct()
    {
        $sqliteAdapter = new SqliteAdapter(Config::getDbConfig());
        Db::init($sqliteAdapter);
    }

    // Custom SQL operation which is not a generic CRUD
    public function findByLoginName(string $login): ?array
    {
        $sql = "SELECT * FROM " . self::$table . " WHERE username = :login";
        $stmt = Db::query($sql, ['login' => $login]);
        $result = $stmt->fetch();
        return $result ?: null;
    }
}