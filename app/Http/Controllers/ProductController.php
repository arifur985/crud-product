<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $datas = Product::latest()->get();
        $datas=Product::simplePaginate(5);
        return view('Index', compact('datas'));
    }

    public function addProduct(){
        return view ('addProduct');
    }

    public function storeProduct(Request $request){
        $rules = [
            'productName'=>'required|max:10',
            'productPrice'=>'required|numeric',
        ];

        $this->validate($request, $rules);

        $product=New Product();
        $product->productName=$request->productName;
        $product->productPrice=$request->productPrice;
        $product->save();

        //dd($product);

        //return $request->all();

        return redirect('/')->with('status', 'Product successfully added');
    }

    public function editProduct($id=null){
        $edit_data=Product::find($id);
        return view('editProduct', compact('edit_data'));
    }

    public function updateProduct(Request $request, $id){
        $rules = [
            'productName'=>'required|max:10',
            'productPrice'=>'required|numeric',
        ];

        $this->validate($request, $rules);

        $product=Product::find($id);
        $product->productName=$request->productName;
        $product->productPrice=$request->productPrice;
        $product->save();

        //dd($product);

        //return $request->all();

        return redirect('/')->with('status', 'Product successfully updated');
    }

    public function deleteProduct($id=null){
        $delete_data=Product::find($id);
        $delete_data->delete();
        return redirect('/')->with('status', 'Product successfully deleted');

    }
}
