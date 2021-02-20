<?php

function createTagUnitTestAbstractClassName($tag) {
    return ucwords(createCamelCaseName('abstract-'.$tag.'-test'));
}



function createTagUnitTestSetupFunction($tag) {

}

function createTagUnitTestSettersGettersTest($attributes) {

}

function createTagUnitTestSettersGettersTest_SettersCalls($attributes) {

}

function createTagUnitTestSettersGettersTest_GettersAsserts($attributes) {

}

function createTagUintTestAbstractClass($tag, $attributes) {
    $code = "namespace WabLab\Tests\Auto\n\n";
    $code .= "use WabLab\Tests\AbstractTestCase\n";
    $code .= createTagClassNamespaceUse($tag)."\n\n";
    $code .= "abstract class ".createTagUnitTestAbstractClassName($tag)."\n";
    $code .="{\n";

    $code .="}\n";

    return $code;
}