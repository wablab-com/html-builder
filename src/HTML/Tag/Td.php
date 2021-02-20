<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Td extends AbstractContainerTag
{

    protected string $tagName = 'td';

    use Trait\ColspanAttributeTrait;
    use Trait\HeadersAttributeTrait;
    use Trait\RowspanAttributeTrait;

}