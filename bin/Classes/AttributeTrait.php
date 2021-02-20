<?php

namespace WabLab\Bin\Classes;

class AttributeTrait
{
    private string $attribute;
    private string $description;

    private static $instances = [];
    public static function instance(string $attribute, string $description = ''):static {
        if(!isset(static::$instances[$attribute])) {
            static::$instances[$attribute] = new static($attribute, $description);
        }
        static::$instances[$attribute]->description = $description;
        return static::$instances[$attribute];
    }

    protected function __construct(string $attribute, string $description)
    {
        $this->attribute = $attribute;
        $this->description = $description;
    }

    public static function getNamespace():string {
        return 'WabLab\HtmlBuilder\HTML\Attribute\Trait';
    }

    public function getTraitName():string {
        return ucfirst(\createCamelCaseName($this->attribute.'-attribute-trait'));
    }

    public function code() {
        $trait = "namespace {$this->getNamespace()};\n\n";
        $trait .= "trait {$this->getTraitName()} {\n\n";
        $trait .= indent(1, AttributeGetterFunction::instance($this->attribute, $this->description)->code())."\n\n";
        $trait .= indent(1, AttributeSetterFunction::instance($this->attribute, $this->description)->code())."\n";
        $trait .= "}\n";
        return $trait;
    }

    public function generate() {
        file_put_contents(BINDIR."/../src/HTML/Attribute/Trait/{$this->getTraitName()}.php", "<?php\n\n{$this->code()}");
    }
}