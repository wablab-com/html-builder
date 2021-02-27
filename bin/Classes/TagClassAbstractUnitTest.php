<?php

namespace WabLab\Bin\Classes;

use WabLab\Bin\Classes\Tests\SettersGettersTestFunction;

class TagClassAbstractUnitTest
{
    const NAMESPACE = 'WabLab\Tests\Unit\Tag\Auto';

    private string $tag = '';

    private static $instances = [];
    public static function instance(string $tag):static
    {
        if(!isset(static::$instances[$tag])) {
            static::$instances[$tag] = new static($tag);
        }
        return static::$instances[$tag];
    }

    protected function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    public function getClassName():string {
        return ucwords(\createCamelCaseName('abstract-'.$this->tag.'-test'));
    }

    protected function getClassPropertiesCode():string {
        return 'protected '.TagClass::instance($this->tag)->getClassName().' $tagObj;';
    }

    protected function getSetupFunction():string
    {
        $tagClassObj = TagClass::instance($this->tag);
        $code = "function setUp(): void\n";
        $code .= "{\n";
        $code .= indent(1, "parent::setUp();")."\n";
        $code .= indent(1, "\$this->tagObj = {$tagClassObj->getClassName()}::create();")."\n\n";
        $code .= "}\n";
        return $code;
    }

    public function code() {
        $tagClassObj = TagClass::instance($this->tag);
        $code = 'namespace '.static::NAMESPACE.";\n\n";
        $code .= "use WabLab\Tests\AbstractTestCase;\n";
        $code .= "use ".TagClass::NAMESPACE.'\\'.$tagClassObj->getClassName().";\n\n";
        $code .= "abstract class {$this->getClassName()} extends AbstractTestCase\n";
        $code .="{\n\n";
        $code .= indent(1, $this->getClassPropertiesCode())."\n\n";
        $code .= indent(1, $this->getSetupFunction())."\n\n";
        $attributesToTest = array_merge(
            $tagClassObj->getAttributes(),
            GlobalAttributeTrait::instance()->getAttributes(),
            AllVisibleTagsAttributeTrait::instance()->getAttributes(),
            NotSupportedInHTML5AttributeTrait::instance()->getAttributes()
        );
        $code .= indent(1, SettersGettersTestFunction::instance($this->tag, $attributesToTest)->code())."\n\n";
        $code .="}\n";
        return $code;
    }

    public function generate() {
        file_put_contents(BINDIR."/../tests/Unit/Tag/Auto/{$this->getClassName()}.php", "<?php\n\n{$this->code()}");
    }
}