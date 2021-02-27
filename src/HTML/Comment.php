<?php

namespace WabLab\HtmlBuilder\HTML;

use WabLab\HtmlBuilder\Contract\IRenderableElement;

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
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

}