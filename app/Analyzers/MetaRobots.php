<?php


namespace App\Analyzers;


class MetaRobots extends BaseAnalyzer
{
    public function value($content)
    {
        return $this->metaValue($content, "robots");

    }
}
