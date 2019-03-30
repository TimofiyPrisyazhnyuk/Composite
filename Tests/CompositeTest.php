<?php

namespace Composite\Tests;

use Composite;
use Form;
use InputElement;
use TextElement;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class CompositeTest
 * @package Composite\Tests
 */
class CompositeTest
{
    /**
     * Test Composite
     */
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        var_dump($form->render());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);
        var_dump($form->render());
    }
}

// Run test.
(new CompositeTest())->testRender();