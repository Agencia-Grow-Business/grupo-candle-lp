<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Na Vercel (e similares), força a URL raiz pelo host da requisição
        // para asset()/route() não apontarem para http://localhost.
        if (! $this->app->runningInConsole()) {
            $forwardedProto = $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? null;
            $https = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
                || $forwardedProto === 'https'
                || (($_SERVER['SERVER_PORT'] ?? null) === '443');

            $host = $_SERVER['HTTP_X_FORWARDED_HOST']
                ?? $_SERVER['HTTP_HOST']
                ?? null;

            if (is_string($host) && $host !== '') {
                URL::forceRootUrl(($https ? 'https' : 'http').'://'.$host);
                URL::forceScheme($https ? 'https' : 'http');
            }
        }
    }
}
