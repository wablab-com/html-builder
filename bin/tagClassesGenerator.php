<?php

require __DIR__.'/../vendor/autoload.php';

use WabLab\Bin\Classes\AllVisibleTagsAttributeTrait;
use WabLab\Bin\Classes\AttributeTrait;
use WabLab\Bin\Classes\GlobalAttributeTrait;
use WabLab\Bin\Classes\TagClass;

define('BINDIR', __DIR__);

require BINDIR.'/includes/helpers.php';

//
// main
//

// create attributes traits
$attributes = getAllAttributes();
foreach ($attributes as $attribute) {
    AttributeTrait::instance($attribute['attribute'], $attribute['description'])->generate();
    //$traitCode = createAttributeTrait($attribute['attribute'], $attribute['description'])."\n";
    //createAttributeTraitFile($attribute['attribute'], $traitCode);
}

AllVisibleTagsAttributeTrait::instance()->generate();
GlobalAttributeTrait::instance()->generate();
//createAttributeTraitFile('all-visible-tags', createAllVisibilTagTrait());
//createAttributeTraitFile('global', createGlobalAttributeTrait());


// create tags classes && unit tests
$allAttributesByGroup = getAllAttributesByGroup();
$allTags = getAllTags();
foreach($allTags as $tag) {
    TagClass::instance($tag['tag'], $allAttributesByGroup[$tag['tag']] ?? [])->generate();

//    $tagClassCode = createTagClass($tag['tag'], $allAttributesByGroup[$tag['tag']] ?? [])."\n\n";
//    createTagClassFile($tag['tag'], $tagClassCode);

    //$tagUnitTestCode = createTagUintTestClass($tag['tag'], $allAttributesByGroup[$tag['tag']] ?? [])."\n\n";
    //createTagUnitTestFile($tag['tag'], $tagUnitTestCode);
}



