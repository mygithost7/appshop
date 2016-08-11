<?php

namespace App\Providers;

/*use View;*/
use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends  ServiceProvider{

    public function boot(){
        //Using class based composers...
        View::composer('*', 'App\Http\Composers\MainComposer');
    }

    public function register(){
        //
    }
}