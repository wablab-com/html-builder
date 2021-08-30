<?php

namespace WabLab\HtmlBuilder\HTML\Renderer;

use WabLab\HtmlBuilder\Contract\IRenderableElement;

class RendererMapper
{
    protected $map = [];
    protected static $globalMap = [];

    public function register(string $type, $rendererClass) {
        $this->map[$type] = $rendererClass;
    }

    public function unRegister(string $type) {
        unset($this->map[$type]);
    }

    public static function registerGlobal(string $type, $rendererClass) {
        static::$globalMap[$type] = $rendererClass;
    }

    public static function unRegisterGlobal(string $type) {
        unset(static::$globalMap[$type]);
    }

    public function mapRenderableElement(IRenderableElement $element) {
        $className = get_class($element);
	    if(isset($this->map[$className])) {
            return $this->map[$className];
        }
	    if(isset(static::$globalMap[$className])) {
	        return static::$globalMap[$className];
        }

        foreach($this->map as $type => $rendererClass) {
            if(is_subclass_of($element, $type)) {
                return $rendererClass;
            }
        }

        foreach(static::$globalMap as $type => $rendererClass) {
            if(is_subclass_of($element, $type)) {
                return $rendererClass;
            }
        }

        if(class_exists($className.'Renderer')) {
            return $className.'Renderer';
        }

        return null;
    }
}
