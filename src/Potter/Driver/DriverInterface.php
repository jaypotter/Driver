<?php

declare(strict_types=1);

namespace Potter\Driver;

use Potter\Name\NameInterface;

interface DriverInterface extends NameInterface
{
    public function read(object $handle): mixed;
    public function write(string $bytes, object $handle): void;
}
