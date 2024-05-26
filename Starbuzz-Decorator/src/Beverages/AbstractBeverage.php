<?php

namespace App\Beverages;

abstract class AbstractBeverage
{
    public const SIZE_TALL = 'tall';
    public const SIZE_GRANDE = 'grande';
    public const SIZE_VENTI = 'venti';

    /**
     * @var string
     */
    protected $size;

    public function __construct(string $size = self::SIZE_TALL)
    {
        $this->size = self::SIZE_TALL;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    abstract public function getDescription(): string;

    abstract public function cost(): float;
}
