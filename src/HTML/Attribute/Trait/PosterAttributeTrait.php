<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait PosterAttributeTrait {

    /**
     * Specifies an image to be shown while the video is downloading, or until the user hits the play button
     * @return string
     */
    public function getPoster():string {
        return $this->getAttribute('poster');
    }

    /**
     * Specifies an image to be shown while the video is downloading, or until the user hits the play button
     * @return $this
     */
    public function setPoster(string $value):static {
        return $this->setAttribute('poster', $value);
    }
}
