<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::macro('search', function ($field, $string) {
            if (! $string) {
                return $this;
            }
            $fields = is_array($field) ? $field : [$field];

            foreach ($fields as $key => $f) {
                $method = ($key === 0) ? 'where' : 'orWhere';
                $this->$method($f, 'LIKE', "%{$string}%");
            }
            return $this;
        });
    }
}
