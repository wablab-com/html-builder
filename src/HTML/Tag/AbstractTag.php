<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\Contract\IRenderableElement;
use WabLab\HtmlBuilder\HTML\Attribute\Trait\AllVisibleTagsAttributesTrait;
use WabLab\HtmlBuilder\HTML\Attribute\Trait\GlobalAttributesTrait;
use WabLab\HtmlBuilder\HTML\Attribute\Trait\NotSupportedInHtml5AttributesTrait;
use WabLab\HtmlBuilder\HTML\Element;

abstract class AbstractTag extends Element implements IRenderableElement
{

    use GlobalAttributesTrait;
    use AllVisibleTagsAttributesTrait;
    use NotSupportedInHtml5AttributesTrait;

    protected string $tagName = '';

    protected bool $shortCloseAllowed = false;

    protected string $innerText = '';

    private array $attributes = [];

    protected function __construct()
    {
        if(!$this->tagName) {
            throw new \Exception("\$tagName variable must be overridden.");
        }
    }

    public function getInnerText(): string
    {
        return $this->innerText;
    }

    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function getTagName(): string
    {
        return $this->tagName;
    }

    public function getAttributes() : array {
        return $this->attributes;
    }

    public function isShortCloseAllowed(): bool
    {
        return $this->shortCloseAllowed;
    }


    /**
     * @return $this
     */
    public function setAttribute(string $name, string $value):static {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function getAttribute(string $name) {
        return $this->attributes[$name] ?? '';
    }

    public function removeAttribute(string $name):void {
        unset($this->attributes[$name]);
    }

}