<?php


namespace App\Analyzers;


class Canonical extends BaseAnalyzer
{
    public function value($content)
    {
        return $this->linkHref($content, "canonical");

    }

    protected function linkHref($content, $rel)
    {
        preg_match("/<link.*[rel]=\"{$rel}\" href=\"(.*)\"/", $content, $matches);
        return $matches[1]??"";
    }

}
