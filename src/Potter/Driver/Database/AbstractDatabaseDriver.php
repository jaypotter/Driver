<?php

declare(strict_types=1);

namespace Potter\Driver\Database;

use Potter\Database\Statement\StatementInterface;

abstract class AbstractDatabaseDriver implements DatabaseDriverInterface
{
    abstract public function prepare(string $query, object $handle): StatementInterface;
}
