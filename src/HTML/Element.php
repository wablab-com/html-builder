<?php

namespace WabLab\HtmlBuilder\HTML;

use WabLab\HtmlBuilder;

class Element
{

    private static string $uniqueIdPrefix = '';

    private string $hash = '';

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function hash() : string {
        if(!$this->hash) {
            if(!static::$uniqueIdPrefix) {
                // this will be generated only once for each process
                static::$uniqueIdPrefix = sha1(gethostname().'-'.microtime().'-'.mt_rand(1000000000000000, 9999999999999999).'-'.getmypid().'-'.uniqid('', true)).'-';
            }
            $this->hash = uniqid(static::$uniqueIdPrefix, false);
        }
        return $this->hash;
    }

}