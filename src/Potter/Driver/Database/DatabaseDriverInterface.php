<?php

declare(strict_types=1);

namespace Potter\Driver\Database;

use Potter\Database\{Result\ResultInterface, Statement\StatementInterface};
use Potter\Driver\DriverInterface;

interface DatabaseDriverInterface extends DriverInterface
{
    public function getResult(StatementInterface $statement): ResultInterface;
    public function prepare(string $query, object $handle): StatementInterface;
}
