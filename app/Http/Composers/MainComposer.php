<?php
namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Category;

class MainComposer{

    public function compose(View $view){
        $view->with('categories', Category::all());
    }
}