<?php

namespace WabLab\Bin\Classes\Tests;

use WabLab\Bin\Classes\AttributeGetterFunction;
use WabLab\Bin\Classes\AttributeSetterFunction;

class TagRendererTestFunction
{

    private array $attributes;
    private string $tag = '';

    private static $instances = [];

    public static function instance(string $tag, array $attributes):static {
        if(!isset(static::$instances[$tag])) {
            static::$instances[$tag] = new static($attributes);
            static::$instances[$tag]->tag = $tag;
        }
        return static::$instances[$tag];
    }

    protected function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }


    public function getFunctionName():string
    {
        return \createCamelCaseName('test-tag-basic-renderer');
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
        $function .= indent(1,"\$renderer = new HtmlTagRenderer(\$this->rendererMapper, \$this->tagObj);")."\n";
        $function .= indent(1,"\$renderedTag = \$renderer->render();")."\n";
        $function .= "\n";
        $function .= indent(1,"\$this->assertStringContainsString('<{$this->tag}', \$renderedTag);")."\n";
        foreach($this->attributes as $attribute) {
            //$attributeGetterObj = AttributeGetterFunction::instance($attribute);
            $function .= indent(1,"\$this->assertStringContainsString('{$attribute}', \$renderedTag);")."\n";
        }
        $function .= "\n}";
        return $function;
    }

}