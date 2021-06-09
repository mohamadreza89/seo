<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class TagAnalyzer extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\Services\TagAnalyzer::class;
    }

}
