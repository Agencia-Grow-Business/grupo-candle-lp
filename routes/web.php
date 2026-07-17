<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LeadController::class, 'index'])->name('home');
Route::post('/diagnostico', [LeadController::class, 'store'])->name('leads.store');
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');

Route::get('/robots.txt', function () {
    $sitemap = url('/sitemap.xml');

    return response(
        "User-agent: *\nAllow: /\n\nSitemap: {$sitemap}\n",
        200,
        ['Content-Type' => 'text/plain; charset=UTF-8']
    );
})->name('robots');

Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => url('/'), 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => url('/checkout'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ];

    $body = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $body .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

    foreach ($urls as $url) {
        $body .= "  <url>\n";
        $body .= '    <loc>'.e($url['loc'])."</loc>\n";
        $body .= '    <changefreq>'.$url['changefreq']."</changefreq>\n";
        $body .= '    <priority>'.$url['priority']."</priority>\n";
        $body .= "  </url>\n";
    }

    $body .= '</urlset>';

    return response($body, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
})->name('sitemap');
