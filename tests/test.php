<?php

require __DIR__.'/../vendor/autoload.php';

use WabLab\HtmlBuilder\HTML\Renderer\HtmlTagRenderer;
use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;
use WabLab\HtmlBuilder\HTML\Tag\Div;
use WabLab\HtmlBuilder\HTML\Tag\Span;
use WabLab\HtmlBuilder\HTML\Tag\A;

$div = Div::create()->addChild(
        Span::create()->addChild(
            A::create()->setTarget('_blank')
        )->setClass("m-4 p-5")
        ->setId('new span id')
        ->setInnerText('looooooooooooo')
    )
    ->addChild(
        A::create()->setInnerText('Go To My Website')->setHref('http://www.ahmad-saleh.net')
    );


$rendererMapper = new RendererMapper();
$rendererMapper->register(\WabLab\HtmlBuilder\HTML\Tag\AbstractTag::class, HtmlTagRenderer::class);


$renderer = new HtmlTagRenderer($rendererMapper, $div);
echo "\n\n".$renderer->render()."\n\n";
