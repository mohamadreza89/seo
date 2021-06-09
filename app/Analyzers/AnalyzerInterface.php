<?php


namespace App\Analyzers;


interface AnalyzerInterface
{
    public function check($content): bool;

    public function value($homeContent);

}
