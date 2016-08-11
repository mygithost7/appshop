<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Classified;

class CategoriesController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classifieds = Category::find($id)->classifieds;
        return view('index', compact('classifieds'));
    }

}
