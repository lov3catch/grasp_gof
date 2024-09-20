<?php

declare(strict_types=1);

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
    if ($currentOs === 'win') {
        $button = new ButtonWin();
        $input = new InputWin();
        $textarea = new TextAreaWin();
    } else {
        $button = new ButtonIOS();
        $input = new InputIOS();
        $textarea = new TextAreaIOS();
    }
}
