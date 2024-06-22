<?php

namespace App;

class Menu extends MenuComponent
{
    private $children;

    public function __construct(string $name, string $description)
    {
        parent::__construct($name, $description);
        $this->children = [];
    }

    public function print(): void
    {
        print("--------------------------------\n");
        print(" " . $this->getName());
        print(" " . $this->getDescription());
        print("\n");

        foreach ($this->children as $child) {
            $child->print();
        }

        print("--------------------------------\n");
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->children[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent): void
    {
        $index = array_search($menuComponent, $this->children);
        if ($index !== false) {
            unset($this->children[$index]);
        }
    }
    public function getChild(int $i): MenuComponent
    {
        return $this->children[$i];
    }
}
