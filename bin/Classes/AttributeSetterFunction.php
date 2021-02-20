<?php

namespace WabLab\Bin\Classes;

class AttributeSetterFunction
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
        $comment .= " * @return \$this\n";
        $comment .= " */";
        return $comment;
    }

    public function getFunctionName():string
    {
        return \createCamelCaseName('set-'.$this->attribute);
    }

    public function getFunctionPrototype():string
    {
        return "public function {$this->getFunctionName()}(string \$value):static";
    }

    public function code():string
    {
        $function = $this->getAnnotationComment()."\n";
        $function .= $this->getFunctionPrototype()." {\n";
        $function .= indent(1,"return \$this->setAttribute('{$this->attribute}', \$value);");
        $function .= "\n}";
        return $function;
    }

}