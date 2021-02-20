<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait DownloadAttributeTrait {

    /**
     * Specifies that the target will be downloaded when a user clicks on the hyperlink
     * @return string
     */
    public function getDownload():string {
        return $this->getAttribute('download');
    }

    /**
     * Specifies that the target will be downloaded when a user clicks on the hyperlink
     * @return $this
     */
    public function setDownload(string $value):static {
        return $this->setAttribute('download', $value);
    }
}

