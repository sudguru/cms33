<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   

        View::composer(
            [
                'front.shop7.layout',
                'front.shop7.index',
                'front.shop7.dailydeal',
                'front.shop7.login',
                'front.shop7.register',
                'front.shop7.post',
                'front.shop7.post-category',
                'front.shop7.product',
                'front.shop7.product-hub',
                'front.shop7.product-detail'
            ],
            'App\Http\ViewComposers\CommonComposer'
        );
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // \App::singleton('\App\Http\ViewComposers\Commonomposer', function(){
        //     return new \App\Http\ViewComposers\Commonomposer;
        // });
    }
}
