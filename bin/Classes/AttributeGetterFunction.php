<?php

namespace WabLab\Bin\Classes;

class AttributeGetterFunction
{
    private string $attribute;
    private string $description;

    private static $instances = [];
    public static function instance(string $attribute, string $description):static {
        $id = md5($attribute.'-'.$description);
        if(!isset(static::$instances[$id])) {
            static::$instances[$id] = new static($attribute, $description);
        }
        return static::$instances[$id];
    }

    protected function __construct(string $attribute, string $description)
    {
        $this->attribute = $attribute;
        $this->description = $description;
    }

    protected function getAnnotationComment() :string
    {
        $comment = "/**\n";
        $comment .= " * {$this->description}\n";
        $comment .= " * @return string\n";
        $comment .= " */";
        return $comment;
    }

    public function getFunctionName():string
    {
        return \createCamelCaseName('get-'.$this->attribute);
    }

    public function getFunctionPrototype():string
    {
        return "public function {$this->getFunctionName()}():string";
    }

    public function code():string
    {
        $function = $this->getAnnotationComment()."\n";
        $function .= $this->getFunctionPrototype()." {\n";
        $function .= indent(1,"return \$this->getAttribute('{$this->attribute}');");
        $function .= "\n}";
        return $function;
    }

}