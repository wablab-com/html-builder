<?php

namespace WabLab\Bin\Classes\Tests;

use WabLab\Bin\Classes\AttributeGetterFunction;
use WabLab\Bin\Classes\AttributeSetterFunction;

class SettersGettersTestFunction
{

    private array $attributes;

    private static $instances = [];

    public static function instance(string $tag, array $attributes):static {
        if(!isset(static::$instances[$tag])) {
            static::$instances[$tag] = new static($attributes);
        }
        return static::$instances[$tag];
    }

    protected function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }


    public function getFunctionName():string
    {
        return \createCamelCaseName('test-class-setters-getters');
    }

    public function getFunctionPrototype():string
    {
        return "public function {$this->getFunctionName()}()";
    }

    public function code():string
    {
        $function = $this->getFunctionPrototype()." {\n";
        foreach($this->attributes as $attribute) {
            $attributeSetterObj = AttributeSetterFunction::instance($attribute);
            $function .= indent(1,"\$this->tagObj->{$attributeSetterObj->getFunctionName()}('{$attribute}');")."\n";
        }
        $function .= "\n";
        foreach($this->attributes as $attribute) {
            $attributeGetterObj = AttributeGetterFunction::instance($attribute);
            $function .= indent(1,"\$this->assertEquals('{$attribute}', \$this->tagObj->{$attributeGetterObj->getFunctionName()}('{$attribute}'));")."\n";
        }
        $function .= "\n}";
        return $function;
    }

}