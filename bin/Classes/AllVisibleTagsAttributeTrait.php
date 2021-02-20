<?php

namespace WabLab\Bin\Classes;

class AllVisibleTagsAttributeTrait
{

    protected $attributesToUse = [
        'onblur',
        'onchange',
        'onclick',
        'oncontextmenu',
        'oncopy',
        'oncut',
        'ondblclick',
        'ondrag',
        'ondragend',
        'ondragenter',
        'ondragleave',
        'ondragover',
        'ondragstart',
        'ondrop',
        'onfocus',
        'oninput',
        'oninvalid',
        'onkeydown',
        'onkeypress',
        'onkeyup',
        'onmousedown',
        'onmousemove',
        'onmouseout',
        'onmouseover',
        'onmouseup',
        'onmousewheel',
        'onpaste',
        'onscroll',
        'onselect',
        'onwheel'
    ];

    private static $instance;

    public static function instance(): static
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    protected function __construct() {}

    public function getNamespace(): string
    {
        return 'WabLab\HtmlBuilder\HTML\Attribute\Trait';
    }

    public function getTraitName(): string
    {
        return ucfirst(\createCamelCaseName('all-visible-tags-attributes-trait'));
    }

    public function code()
    {
        $trait = "namespace {$this->getNamespace()};\n\n";
        $trait .= "trait {$this->getTraitName()} {\n\n";
        foreach($this->attributesToUse as $attributeName) {
            $trait .= indent(1, 'use '. AttributeTrait::instance($attributeName)->getTraitName()) . ";\n";
        }
        $trait .= "}\n";
        return $trait;
    }

    public function generate()
    {
        file_put_contents(BINDIR . "/../src/HTML/Attribute/Trait/{$this->getTraitName()}.php", "<?php\n\n{$this->code()}");
    }
}