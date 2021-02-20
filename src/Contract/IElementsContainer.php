<?php

namespace WabLab\HTMLTemplateBuilder\Contract;

use WabLab\HTMLTemplateBuilder\HTML\Element;

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