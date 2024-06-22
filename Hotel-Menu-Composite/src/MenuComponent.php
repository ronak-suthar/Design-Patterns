<?php

namespace App;

abstract class MenuComponent
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function isVegetarian(): bool
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function add(MenuComponent $menuComponent): void
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function getChild(int $i): MenuComponent
    {
        throw new \BadMethodCallException('Not implemented');
    }

    abstract function print(): void;
}
