<?php

namespace App;

/**
 * Class Menuitem
 *
 * @package App
 */
class MenuItem extends MenuComponent
{

    /**
     * @var bool
     */
    private $vegetarian;

    /**
     * @var float
     */
    private $price;

    /**
     * Menuitem constructor.
     *
     * @param string $name
     * @param string $description
     * @param bool $vegetarian
     * @param float $price
     */
    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        parent::__construct($name, $description);
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    /**
     * @return bool
     */
    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function print() : void
    {
        print(" -" . $this->getName());
        if ($this->isVegetarian()) {
            print(" (v)");
        }
        else{
            print(" (nv)");
        }
        print(", " . $this->getPrice());
        print(" --- " . $this->getDescription());
        print("\n");
    }
}
