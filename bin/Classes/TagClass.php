<?php

namespace WabLab\Bin\Classes;

class TagClass
{
    const NAMESPACE='WabLab\HtmlBuilder\HTML\Tag';

    private string $tag = '';
    private array $attributes = [];

    private static $instances = [];
    public static function instance(string $tag, ?array $attributes = null):static {
        if(!isset(static::$instances[$tag])) {
            if(!is_null($attributes)) {
                static::$instances[$tag] = new static($tag, $attributes);
            } else {
                throw new \Exception("Tag '{$tag}' class has not been initialized yet, if you want to create a new instance then you have to set the attributes.");
            }

        }
        return static::$instances[$tag];
    }

    protected function __construct(string $tag, array $attributes)
    {
        $this->tag = $tag;
        $this->attributes = $attributes;
    }

    public function getAttributes():array {
        return $this->attributes;
    }

    public function getClassName():string {
        if(in_array($this->tag, ['object', 'var'])) {
            return ucwords(\createCamelCaseName($this->tag.'-tag'));
        }
        return ucwords(\createCamelCaseName($this->tag));
    }

    protected function getClassPropertiesCode():string {
        return "protected string \$tagName = '{$this->tag}';";
    }

    public function code() {
        $code = "namespace ".static::NAMESPACE.";\n\n";
        $code .= 'use '.AttributeTrait::NAMESPACE.";\n\n";
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