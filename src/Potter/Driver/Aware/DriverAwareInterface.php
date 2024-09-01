<?php

declare(strict_types=1);

namespace Potter\Driver\Aware;

use Potter\Driver\DriverInterface;

interface DriverAwareInterface 
{
    public function getDriver(): DriverInterface;
    public function hasDriver(): bool;
    public function withDriver(?DriverInterface $driver = null): static;
    public function withoutDriver(): static;
}
