<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Str;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('role:customer');
    }

    public function home()
    {
        $style = [
            'heroNormal' => 'hero_normal',
        ];

        return view('organic.home');
    }

    public function shopGrid()
    {
        $style = [
            'heroNormal' => 'hero_normal',
        ];


        return view('organic.home');
    }

    public function shopDetails()
    {
        return view('organic.shop_grid');
    }
}
