<?php

namespace Parina\Shared\Infrastructure;

class Db
{
    private static DatabaseAdapter $adapter;

    public static function init(DatabaseAdapter $adapter)
    {
        self::$adapter = $adapter;
    }

    public static function query(string $sql, $params = [])
    {
        return self::$adapter->query($sql, $params);
    }

    public static function exec(string $sql): int
    {
        return self::$adapter->exec($sql);
    }

    /**
     * Delegamos la directiva específica al motor actual
     */
    public static function limit(int $limit, int $offset = 0): string
    {
        return self::$adapter->getLimitSql($limit, $offset);
    }
}
