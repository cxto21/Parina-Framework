<?php

namespace Parina\Shared\Infrastructure\Adapters;

use Parina\Shared\Infrastructure\DatabaseAdapter;
use PDO;

class MySqlAdapter implements DatabaseAdapter
{
    private PDO $pdo;

    public function __construct(array $config)
    {
        $this->pdo = new PDO($config['dsn'], $config['user'], $config['pass']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function query(string $sql, array $params = []): \PDOStatement
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function exec(string $sql): int
    {
        return $this->pdo->exec($sql);
    }

    public function getLimitSql(int $limit, int $offset = 0): string
    {
        return " LIMIT $offset, $limit";
    }
}