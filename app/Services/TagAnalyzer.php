<?php


namespace App\Services;


use App\Analyzers\AnalyzerInterface;
use Illuminate\Support\Facades\Cache;

class TagAnalyzer
{
    protected $tags = [
        "h1",
        "h2",
        "h3",
        "h4",
        "h5",
        "h6",
        "header",
        "nav",
        "footer",
        "main",
        "p",
        "section",
        "article",
        "aside",
        "span",
        "address",
        "a",
        "audio",
        "video",
        "img",
        "alt",
        "track",
        "script",
    ];

    protected $services = [
        "meta-title",
        "meta-description",
        "open-graph",
        "tw-card",
        "meta-robots",
        "meta-keyword",
        "charset",
        "viewport",
        "canonical",
        "hreflang",
    ];

    public static function metas()
    {
        return app(self::class)->services;
    }


    public function check($tag)
    {
        //$productUrl = request("product_url");


        $homeContent = Cache::remember("home_content", 60 * 60 * 24, function () {
            if (is_integer(strpos("http", request("home_url"))))
                return file_get_contents(request("home_url"));
            else
                return file_get_contents("https://" . request("home_url"));

        });

        if (in_array($tag, $this->tags)) {
            return is_integer(strpos($homeContent, $tag));
        }

        if (in_array($tag, $this->services)) {
            /** @var AnalyzerInterface $analyzer */
            $analyzer = app($tag);
            $var = $analyzer->check($homeContent);

            return $var;
        }



        return true;
    }

    public function value($meta)
    {
        $homeContent = Cache::remember("home_content", 60 * 60 * 24, function () {
            if (is_integer(strpos("http", request("home_url"))))
                return file_get_contents(request("home_url"));
            elseif (is_integer(strpos("https", request("home_url"))))
                return file_get_contents(request("home_url"));
            else
                return file_get_contents("https://" . request("home_url"));

        });

        if (in_array($meta, $this->services)) {
            /** @var AnalyzerInterface $analyzer */
            $analyzer = app($meta);
            $var = $analyzer->value($homeContent);

            return $var;
        }
    }

}
