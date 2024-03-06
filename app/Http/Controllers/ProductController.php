<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        return view('pages.dashboard.product',[
            'products' => Product::all(),
            'action' => 'create'
        ]);

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required'
           
        ]);
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
        ]);
        return redirect('/dashboard/products')->with('status',"Product Created");
    }
    public function delete($id){
        $data = Product::find($id);
        $data->delete();
        return redirect('/dashboard/products')->with('status',"Product Deleted");
    }
    public function showData(Product $product){        
        return view('pages.dashboard.product',[
            'product' =>  $product,
            'products' => Product::all(),
            'action' => 'edit'
        ]);
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/dashboard/products')->with('status',"Product Update");

    }

}

// App\Models\Product::create([
//     'name' => 'asdasd',
//     'desc' => 'asdasd',
//     'price' => 30
// ])