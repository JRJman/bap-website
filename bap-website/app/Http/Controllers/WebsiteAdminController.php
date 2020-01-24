<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;

class WebsiteAdminController extends Controller
{
    public function showPage(){
        $products = Product::paginate(10);

        return view('website.admin', ['producten' => $products]);
    }

    public function store(Request $request)
    {
        $productData = $request->validate([
            'titel' => 'required|max:255',
            'kleine_beschrijving' => 'required',
            'grote_beschrijving' => 'required',
            'prijs' => 'required|max:10',
            'aantal' => 'required|max:10',
            'image' => 'image|required'
        ]);

        $image =  $productData['image']->store('images','public');
        $productData['image'] = $image;

        Product::create($productData);

        return redirect()->back();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('website.adminEdit',['product'=>$product]);
    }

    public function update(Request $request, $id)
    {
        $productData = $request->validate([
            'titel' => 'required',
            'beschrijving_klein' => 'required',
            'beschrijving_groot' => 'required',
            'prijs' => 'required',
            'aantal' => 'required'
        ]);

        $product = Product::find($id);

        $product->titel = $productData["titel"];
        $product->kleine_beschrijving = $productData["beschrijving_klein"];
        $product->grote_beschrijving = $productData["beschrijving_groot"];
        $product->prijs = $productData["prijs"];
        $product->aantal = $productData["aantal"];
        $product->image = 'hello';

        $product->save();

        return redirect('admin');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
