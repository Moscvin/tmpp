<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public static string $mainLanguage;

    public function __construct()
    {
        self::$mainLanguage = config('languages.priority');
    }

    public static function handle($request, Closure $next)
    {
        $locale = self::getLocale();

        if ($locale) {
            App::setLocale($locale);
        } else {
            App::setLocale(self::$mainLanguage);
        }

        return $next($request);
    }

    public static function getLocale(): ?string
    {
        $uri = Request::path();

        $segmentsURI = explode('/', $uri);

        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], array_keys(config('languages.array')))) {

            return $segmentsURI[0];
        }

        return null;
    }
}
