<?php

declare(strict_types=1);


interface FactoryInterface
{
    public function button();

    public function input();

    public function textarea();
}

class WinFactory implements FactoryInterface
{
    public function button(): ButtonWin
    {

    }

    public function input(): InputWin
    {

    }

    public function textArea(): TextAreaWin
    {

    }
}

class IOSFactory
{
    public function button(): ButtonIOS
    {

    }

    public function input(): InputIOS
    {

    }

    public function textArea(): TextAreaIOS
    {

    }
}

class ButtonIOS
{
}

class ButtonWin
{
}

class InputIOS
{
}

class InputWin
{
}

class TextAreaIOS
{
}

class TextAreaWin
{
}

function client(string $currentOs)
{
    $factory = 'win' === $currentOs ? new WinFactory() : new IOSFactory();

    $button = $factory->button();
    $input = $factory->input();
    $textarea = $factory->textArea();
}
