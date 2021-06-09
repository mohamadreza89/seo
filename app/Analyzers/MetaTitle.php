<?php


namespace App\Analyzers;


class MetaTitle extends BaseAnalyzer
{
    public function value($content)
    {
        return $this->metaValue($content, "title");

    }

}
