<?php

namespace WabLab\HTMLTemplateBuilder\HTML;

use WabLab\HTMLTemplateBuilder\Contract\IRenderableElement;

class Comment extends Element implements IRenderableElement
{

    /**
     * @return string
     */
    public function getInnerText(): string
    {
        return $this->innerText;
    }

    /**
     * @param string $innerText
     * @return AbstractComponent
     */
    public function setInnerText(string $innerText): AbstractComponent
    {
        $this->innerText = $innerText;
        return $this;
    }

}