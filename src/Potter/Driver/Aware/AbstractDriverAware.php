<?php

declare(strict_types=1);

namespace Potter\Driver\Aware;

abstract class AbstractDriverAware 
{
    abstract public function getDriver(): DriverInterface;
    abstract public function hasDriver(): bool;
    abstract protected function setDriver(?DriverInterface $driver = null): ?DriverInterface;
    abstract protected function unsetDriver(): void;
    abstract public function withDriver(?DriverInterface $driver = null): static;
    abstract public function withoutDriver(): static;
}
