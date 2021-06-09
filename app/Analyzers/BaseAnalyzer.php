<?php


namespace App\Analyzers;


abstract class BaseAnalyzer implements AnalyzerInterface
{
    public function check($content): bool
    {
        return $this->value($content);
    }

    public function value($homeContent)
    {
        return "";
    }

    /**
     * @param $content
     * @param $str
     * @return mixed
     */
    protected function metaValue($content, $str)
    {
        preg_match("/<meta.*[name|property]=[\"|\']{$str}[\"|\'] content=[\"|\'](.*)[\"|\']/", $content, $matches);

        if (! isset($matches[1])){
            preg_match("/<meta.*[name|property]=\"og\:{$str}\" content=\"(.*)\"/", $content, $matches);

        }
        return $matches[1]??"";
    }
}
