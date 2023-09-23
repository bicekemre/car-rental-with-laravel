<?php
namespace App\Helpers;
class View
{
    public static function route($name, $parameters = [], $absolute = true)
    {
        $parameters['lang'] = app()->getLocale();
        return app('url')->route($name, $parameters, $absolute);
    }
}
