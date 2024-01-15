<?php

namespace App\Repository;
use App\Entity\Pizza;
use Core\Attributes\Table;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: Pizza::class)]
class PizzaRepository extends Repository
{
    public function save(Pizza $pizza):void{
        $reflection = new \ReflectionClass(get_class($pizza));
        if (!$reflection->getNamespaceName() == "App\Entity"){
            throw new \Exception("Entity not found");
        }
        $props = $reflection->getProperties();
        $query = "INSERT INTO $this->tableName";
        var_dump($props);
    }
}