<?php

/**
 * Class InputElement
 * @package Composite
 */
class InputElement implements RenderableInterface
{
    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="text" />';
    }
}
