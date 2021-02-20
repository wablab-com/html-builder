<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Body extends AbstractContainerTag
{


protected string $tagName = 'body';

    use Trait\OnafterprintAttributeTrait;
    use Trait\OnbeforeprintAttributeTrait;
    use Trait\OnbeforeunloadAttributeTrait;
    use Trait\OnerrorAttributeTrait;
    use Trait\OnhashchangeAttributeTrait;
    use Trait\OnloadAttributeTrait;
    use Trait\OnofflineAttributeTrait;
    use Trait\OnonlineAttributeTrait;
    use Trait\OnpagehideAttributeTrait;
    use Trait\OnpageshowAttributeTrait;
    use Trait\OnpopstateAttributeTrait;
    use Trait\OnresizeAttributeTrait;
    use Trait\OnstorageAttributeTrait;
    use Trait\OnunloadAttributeTrait;
    

}

