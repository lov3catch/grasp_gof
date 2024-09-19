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

abstract class Bake implements BakeryInterface
{
    public static function instance(string $bakery): BakeInterface
    {
        if ($bakery === "pizza") {
            return new PizzaBake();
        }

        if ($bakery === "cake") {
            return new CakeBake();
        }

        throw new Exception('Bake not found');
    }
}

class PizzaBake extends Bake
{

    public function make(): BakeryInterface
    {
        return new Pizza();
    }
}

class CakeBake extends Bake
{

    public function make(): BakeryInterface
    {
        return new Cake();
    }
}

function client(string $bakery): BakeryInterface
{
    $bake = Bake::instance($bakery);

    return $bake->make();
}

$bakery = client('cake');
