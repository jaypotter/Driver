<?php

declare(strict_types=1);

namespace Potter\Driver;

abstract class AbstractDriver implements DriverInterface
{
    abstract public function read(object $handle): mixed;
    abstract public function write(string $bytes, object $handle): void;
}
