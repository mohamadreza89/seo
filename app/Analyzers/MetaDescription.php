<?php


namespace App\Analyzers;


class MetaDescription extends BaseAnalyzer
{

    public function value($content)
    {
        return $this->metaValue($content, "description");

    }



}
