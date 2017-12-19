<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use  DB;
use Event;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // mysql 字段长度限制
        Schema::defaultStringLength(191);

        //print query-sql when local
        if ( env('APP_ENV') === 'local' ) {
            DB::connection()->enableQueryLog();
            Event::listen('kernel.handled', function ( $request, $response ) {
                if ( $request->has('sql-debug') ) {
                    $queries = DB::getQueryLog();
                    if (!empty($queries)) {
                        foreach ($queries as &$query) {
                            $query['full_query'] = vsprintf(str_replace('?', '%s', $query['query']), $query['bindings']);
                        }
                    }
                    dd($queries);
                }
            });
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
