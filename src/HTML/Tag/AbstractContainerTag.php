<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\Contract\IElementsContainer;
use WabLab\HTMLTemplateBuilder\HTML\Element;

abstract class AbstractContainerTag extends AbstractTag implements IElementsContainer
{

    protected array $children = [];

    /**
     * @return $this
     */
    public function addChild(Element $child):static {
        $this->children[$child->hash()] = $child;
        return $this;
    }

    /**
     * @return $this
     */
    public function removeChild(Element $child):static {
        unset($this->children[$child->hash()]);
        return $this;
    }

    /**
     * @return Element[]
     */
    public function getChildren():array {
        return $this->children;
    }
}