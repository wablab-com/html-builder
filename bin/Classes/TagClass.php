<?php

namespace WabLab\Bin\Classes;

class TagClass
{
    private string $tag = '';
    private array $attributes = [];

    private static $instances = [];
    public static function instance(string $tag, array $attributes):static {
        if(!isset(static::$instances[$tag])) {
            static::$instances[$tag] = new static($tag, $attributes);
        }
        return static::$instances[$tag];
    }

    protected function __construct(string $tag, array $attributes)
    {
        $this->tag = $tag;
        $this->attributes = $attributes;
    }

    public static function getNamespace():string {
        return 'WabLab\HtmlBuilder\HTML\Tag';
    }

    public function getClassName():string {
        if($this->tag === 'object') {
            return ucwords(\createCamelCaseName($this->tag.'-tag'));
        }
        return ucwords(\createCamelCaseName($this->tag));
    }

    protected function getClassPropertiesCode():string {
        return "protected string \$tagName = '{$this->tag}';";
    }

    public function code() {
        $code = "namespace {$this->getNamespace()};\n\n";
        $code .= 'use '.AttributeTrait::getNamespace().";\n\n";
        $code .= "class {$this->getClassName()} extends AbstractContainerTag\n";
        $code .= "{\n\n";
        $code .= indent(1, $this->getClassPropertiesCode())."\n\n";
        foreach($this->attributes as $attribute) {
            $code .= indent(1, 'use Trait\\'.AttributeTrait::instance($attribute)->getTraitName()).";\n";
        }
        $code .= "\n}";
        return $code;
    }

    public function generate() {
        file_put_contents(BINDIR."/../src/HTML/Tag/{$this->getClassName()}.php", "<?php\n\n{$this->code()}");
    }
}