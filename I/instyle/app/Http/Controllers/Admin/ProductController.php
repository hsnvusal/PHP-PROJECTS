<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Middleware\CheckAdminPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $admin = Auth::guard('admin')->user();

            if (!$admin->hasPermission('product.manage')) {
                abort(403, 'Məhsul idarəsinə icazə yoxdur.');
            }

            return $next($request);
        });
    }


    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }


    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price'=>'required|numeric',
            'old_price'=>'required|numeric',
            'discount_percent'=>'nullable|integer',
            'image'=>'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image']= $request->file('image')->store('products','public');
        }

        Product::create($data);
        return redirect()->route('admin.products.index')->with('success','Məhsul Əlavə Edildi');
    }


    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'old_price' => 'nullable|numeric',
            'discount_percent' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products','public');
        }

        $product->update($data);
        return redirect()->route('admin.products.index')->with('success','Məhsul Yeniləndi');
    }


    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect()->route('admin.products.index')->with('success','Məhsul Silindi');
    }
}
