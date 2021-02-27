<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Wbr extends AbstractTag
{

    protected string $tagName = 'wbr';
    
    protected bool $shortCloseAllowed = true;


}