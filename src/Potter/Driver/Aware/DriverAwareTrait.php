<?php

declare(strict_types=1);

namespace Potter\Driver\Aware;

use Potter\Driver\DriverInterface;

trait DriverAwareTrait 
{
    private const string DRIVER = 'driver';
    private DriverInterface $driver;
    
    final public function getDriver(): DriverInterface
    {
        return $this->get(self::DRIVER);
    }
    
    final public function hasDriver(): bool
    {
        return $this->has(self::DRIVER);
    }
    
    final protected function setDriver(?DriverInterface $driver = null): ?DriverInterface
    {
        if (is_null($driver)) {
            $this->unsetDriver();
            return null;
        }
        return $this->set(self::DRIVER, $driver);
    }
    
    final protected function unsetDriver(): void
    {
        $this->unset(self::DRIVER);
    }
    
    final public function withDriver(?DriverInterface $driver = null): static
    {
        if (is_null($driver)) {
            return $this->withoutDriver();
        }
        return $this->with(self::DRIVER, $driver);
    }
    
    final public function withoutDriver(): static
    {
        return $this->without(self::DRIVER);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
