<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\product;

class GuestController extends Controller
{
    public function index()
    {
        return view('pages.guest.index', [
            'products_promo' => Product::where('status','1')->get(),
            'products_bestseler' => Product::where('status','2')->get(),
            'posts' => Post::latest()->paginate(2)
        ]);
    }
}
