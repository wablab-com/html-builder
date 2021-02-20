<?php

namespace WabLab\Bin\Classes;

class TagClassUnitTest
{
    const NAMESPACE = 'WabLab\Tests\Unit\Tag';

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
        return ucwords(\createCamelCaseName($this->tag.'-test'));
    }


    public function code() {
        $tagClassAbstractUnitTestObj = TagClassAbstractUnitTest::instance($this->tag);
        $code = 'namespace '.static::NAMESPACE.";\n\n";
        $code .= "use ".TagClassAbstractUnitTest::NAMESPACE.'\\'.$tagClassAbstractUnitTestObj->getClassName().";\n\n";
        $code .= "class {$this->getClassName()} extends {$tagClassAbstractUnitTestObj->getClassName()}\n";
        $code .="{\n\n";

        $code .="}\n";
        return $code;
    }

    public function generate() {
        $filePath = BINDIR."/../tests/Unit/Tag/{$this->getClassName()}.php";
        if(true || !file_exists($filePath)) {
            file_put_contents($filePath, "<?php\n\n{$this->code()}");
        }
    }
}