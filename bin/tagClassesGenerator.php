<?php

require __DIR__.'/../vendor/autoload.php';

use WabLab\Bin\Classes\AllVisibleTagsAttributeTrait;
use WabLab\Bin\Classes\AttributeTrait;
use WabLab\Bin\Classes\GlobalAttributeTrait;
use WabLab\Bin\Classes\NotSupportedInHTML5AttributeTrait;
use WabLab\Bin\Classes\TagClass;
use WabLab\Bin\Classes\TagClassAbstractUnitTest;
use WabLab\Bin\Classes\TagClassUnitTest;

define('BINDIR', __DIR__);

require BINDIR.'/includes/helpers.php';

//
// main
//

// create attributes traits
$attributes = getAllAttributes();
foreach ($attributes as $attribute) {
    AttributeTrait::instance($attribute['attribute'], $attribute['description'])->generate();
}

AllVisibleTagsAttributeTrait::instance()->generate();
GlobalAttributeTrait::instance()->generate();
NotSupportedInHTML5AttributeTrait::instance()->generate();

// create tags classes && unit tests
$allAttributesByGroup = getAllAttributesByGroup();
$allTags = getAllTags();
foreach($allTags as $tag) {
    TagClass::instance($tag['tag'], $allAttributesByGroup[$tag['tag']] ?? [], $tag['allow_short_close'] ? true : false, $tag['is_empty_element'] ? true : false )->generate();
    TagClassAbstractUnitTest::instance($tag['tag'])->generate();
    TagClassUnitTest::instance($tag['tag'])->generate();
}



