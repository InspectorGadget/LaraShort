<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function showLanding() {
        return response()->json(['data' => 'Hi']);
    }

}
