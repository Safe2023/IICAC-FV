<?php

namespace App\Providers;

use App\Models\Categorie;
use Illuminate\Support\Facades\View; 
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
        // Injecter les catégories dans toutes les vues utilisant layouts.index
        View::composer('layouts.index', function ($view) {
            $view->with('categories', Categorie::latest()->get());
        });
    }
}
