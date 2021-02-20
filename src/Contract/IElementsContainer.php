<?php

namespace WabLab\HtmlBuilder\Contract;

use WabLab\HtmlBuilder\HTML\Element;

interface IElementsContainer
{
    /**
     * @param Element $child
     * @return $this
     */
    public function addChild(Element $child):static;

    /**
     * @param Element $child
     * @return $this
     */
    public function removeChild(Element $child):static;

    /**
     * @return Element[]
     */
    public function getChildren():array;
}