<?php
require_once 'MenuComponent.php';

class Menu extends MenuComponent
{
    private $menuComponents = [];
    private $name;
    private $description;

    public function Menu($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add($menuComponent)
    {
        return array_push($this->menuComponents, $menuComponent);
    }

    public function remove($menuComponent)
    {
        unset($this->menuComponents[array_search($menuComponent,$this->menuComponents)]);
    }

    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function prints()
    {
        echo "<br>".$this->getName();
        echo ", ".$this->getDescription()."<br>";
        echo "--------------------------"."<br>";
        foreach ($this->menuComponents as $menuComponent)
        {
            $menuComponent->prints();
        }
    }
}
