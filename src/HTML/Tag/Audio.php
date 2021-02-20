<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Audio extends AbstractContainerTag
{


protected string $tagName = 'audio';

    use Trait\AutoplayAttributeTrait;
    use Trait\ControlsAttributeTrait;
    use Trait\LoopAttributeTrait;
    use Trait\MutedAttributeTrait;
    use Trait\OnabortAttributeTrait;
    use Trait\OncanplayAttributeTrait;
    use Trait\OncanplaythroughAttributeTrait;
    use Trait\OndurationchangeAttributeTrait;
    use Trait\OnemptiedAttributeTrait;
    use Trait\OnendedAttributeTrait;
    use Trait\OnerrorAttributeTrait;
    use Trait\OnloadeddataAttributeTrait;
    use Trait\OnloadedmetadataAttributeTrait;
    use Trait\OnloadstartAttributeTrait;
    use Trait\OnpauseAttributeTrait;
    use Trait\OnplayAttributeTrait;
    use Trait\OnplayingAttributeTrait;
    use Trait\OnprogressAttributeTrait;
    use Trait\OnratechangeAttributeTrait;
    use Trait\OnseekedAttributeTrait;
    use Trait\OnseekingAttributeTrait;
    use Trait\OnstalledAttributeTrait;
    use Trait\OnsuspendAttributeTrait;
    use Trait\OntimeupdateAttributeTrait;
    use Trait\OnvolumechangeAttributeTrait;
    use Trait\OnwaitingAttributeTrait;
    use Trait\PreloadAttributeTrait;
    use Trait\SrcAttributeTrait;
    

}

