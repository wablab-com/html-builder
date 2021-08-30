<?php

use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;

RendererMapper::registerGlobal('WabLab\HtmlBuilder\HTML\Tag\AbstractTag', 'WabLab\HtmlBuilder\HTML\Renderer\HtmlTagRenderer');
RendererMapper::registerGlobal('WabLab\HtmlBuilder\Contract\IHtmlDocType', 'WabLab\HtmlBuilder\HTML\Renderer\HtmlDocTypeRenderer');
RendererMapper::registerGlobal('WabLab\HtmlBuilder\HTML\Comment', 'WabLab\HtmlBuilder\HTML\Renderer\CommentRenderer');
RendererMapper::registerGlobal('WabLab\HtmlBuilder\HTML\FreeText', 'WabLab\HtmlBuilder\HTML\Renderer\FreeTextRenderer');
