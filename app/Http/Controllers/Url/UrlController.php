<?php

namespace App\Http\Controllers\Url;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UrlController extends Controller
{

    public function store(Request $request) {
        dd($request->input());
    }


}
