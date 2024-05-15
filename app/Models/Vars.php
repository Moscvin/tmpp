<?php

namespace App\Models;

use App\Observers\VarsObserver;
use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

#[ObservedBy(VarsObserver::class)]
class Vars extends Model
{
    use Translatable;

    public array $translatable = [
        'value',
    ];

    protected $fillable = [
        'value',
        'slug',
    ];

    public static function getList()
    {
        if (Cache::has('vars')) {
            $result = Cache::get('vars');
        } else {
            $result = [];
            $vars = Vars::all();

            foreach ($vars as $item) {
                $result[$item->slug] = $item->value;
            }
            Cache::forever('vars', $result);
        }

        return $result;
    }

    public static function get($slug)
    {
        $vars = self::getList();
        return $vars[$slug] ?? null;
    }
}
