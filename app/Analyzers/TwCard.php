<?php


namespace App\Analyzers;


class TwCard extends BaseAnalyzer
{
    public function value($content)
    {
        return $this->metaValue($content, "twitter:card");

    }

}
