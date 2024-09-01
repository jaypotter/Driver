<?php

declare(strict_types=1);

namespace Potter\Driver\Database;

use Potter\Database\{Result\ResultInterface, Statement\StatementInterface};
use Potter\Driver\DriverInterface;

abstract class AbstractDatabaseDriver implements DatabaseDriverInterface
{
    abstract public function getResult(StatementInterface $statement): ResultInterface;
    abstract public function prepare(string $query, object $handle): StatementInterface;
}
