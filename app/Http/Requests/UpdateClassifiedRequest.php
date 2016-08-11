<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Bus\SelfHandling;

class UpdateClassifiedRequest extends Request implements SelfHandling{

    public function authorize(){
        return true;
    }


    public function rules(){
        return [
            'title' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'email' => 'required|email',
        ];
    }


}