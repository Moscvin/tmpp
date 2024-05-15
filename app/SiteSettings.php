<?php

namespace App;

use App\Models\Setting;
use Illuminate\Contracts\Config\Repository as ConfigContract;
use Illuminate\Support\Arr;

class SiteSettings implements ConfigContract
{

    protected array $items;

    public function __construct()
    {
        $this->items = cache()->rememberForever('settings.cache_key', function () {
            return Setting::all()->pluck('value', 'key')->toArray();
        });

    }

    /**
     * Determine if the given configuration value exists.
     *
     * @param string $key
     * @return bool
     */
    public function has($key): bool
    {
        return Arr::has($this->items, $key);
    }

    /**
     * Get the specified configuration value.
     *
     * @param array|string $key
     * @param mixed $default
     * @return string
     */
    public function get($key, $default = null): string
    {
        return Arr::get($this->items, $key, $default) ?? '';
    }

    /**
     * Get all of the configuration items for the application.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->items;
    }

    /**
     * Set a given configuration value.
     *
     * @param array|string $key
     * @param mixed $value
     * @return void
     */
    public function set($key, $value = null): void
    {

        $keys = is_array($key) ? $key : [$key => $value];

        foreach ($keys as $key => $value) {
            Arr::set($this->items, $key, $value);

            $this->saveToDB($key, $value);
        }

        //dd($key, $value);
    }

    /**
     * Prepend a value onto an array configuration value.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function prepend($key, $value): void
    {
        $array = $this->get($key, []);

        array_unshift($array, $value);

        $this->set($key, $array);
    }

    /**
     * Push a value onto an array configuration value.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function push($key, $value): void
    {
        $array = $this->get($key, []);

        $array .= $value;

        $this->set($key, $array);
    }

    protected function saveToDB($key, $value): void
    {
        Setting::updateOrCreate([
            'key' => $key,
        ], [
            'value' => $value,
        ]);
    }

}
