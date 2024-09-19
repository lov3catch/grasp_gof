<?php

declare(strict_types=1);

interface BakeryInterface
{

}

interface BakeInterface
{
    public function make(): BakeryInterface;
}

class Pizza implements BakeryInterface
{
}

class Cake implements BakeryInterface
{
}

class BakeCreator
{
    public static function createBake(): BakeInterface
    {
        return new PizzaBake();
    }
}

class PizzaBake implements BakeInterface
{

    public function make(): BakeryInterface
    {
        return new Pizza();
    }
}

class CakeBake implements BakeInterface
{

    public function make(): BakeryInterface
    {
        return new Cake();
    }
}

function client(string $bakery): BakeryInterface
{
    $bake = null;

    if ($bakery === "pizza") {
        $bake = new PizzaBake();
    }

    if ($bakery === "cake") {
        $bake = new CakeBake();
    }

    return $bake->make();
}

$bakery = client('cake');
