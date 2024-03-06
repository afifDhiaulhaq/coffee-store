<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class GuestController extends Controller
{
    public function index(){
        return view('pages.guest.index',[
            'products_promo' => Product::where('status','1')->get(),
            'products_bestseler' => Product::where('status','2')->get()
        ]);

    }
}
