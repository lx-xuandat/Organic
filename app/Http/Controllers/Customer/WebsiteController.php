<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function language(Request $request, $language)
    {
        \Session::put('language', $language);

        return back();
    }
}
