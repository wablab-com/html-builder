<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Base extends AbstractContainerTag
{

    protected string $tagName = 'base';
    
    protected bool $shortCloseAllowed = true;

    use Trait\HrefAttributeTrait;
    use Trait\TargetAttributeTrait;

}