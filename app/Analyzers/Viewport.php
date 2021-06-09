<?php


namespace App\Analyzers;


class Viewport extends BaseAnalyzer
{
    public function value($content)
    {
        return $this->metaValue($content, "viewport");

    }

}
