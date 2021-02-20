<?php

namespace WabLab\Bin\Classes;

class GlobalAttributeTrait
{

    protected $attributesToUse = [
        'accesskey',
        'class',
        'contenteditable',
        'dir',
        'draggable',
        'hidden',
        'id',
        'lang',
        'spellcheck',
        'style',
        'tabindex',
        'title',
        'translate'];

    private static $instance;

    public static function instance(): static
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    protected function __construct() {}

    public function getTraitName(): string
    {
        return ucfirst(\createCamelCaseName('global-attributes-trait'));
    }

    public function code()
    {
        $trait = "namespace ".AttributeTrait::NAMESPACE.";\n\n";
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