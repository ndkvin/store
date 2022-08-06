<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Str;

class DashboardProductsController extends Controller
{    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
      $products = Product::with(['image','category'])
                      ->where('users_id', Auth::user()->id)
                      ->get();

      return view('pages.dashboard-products', [
        'products' => $products
      ]);
    }

    public function create() {
      $categories = Category::all();
      return view('pages.dashboard-product-create', [
        'categories' => $categories,
      ]);
    }

    public function detail($id) {
      $product = Product::with(['image'])->findOrFail($id);
      $categories = Category::all();
      return view('pages.dashboard-product-detail', [
        'product' => $product,
        'categories' => $categories
      ]);
    }

    public function store(ProductRequest $req) {
      $data = $req->all();

      $data['slug'] = Str::slug($req->name);

      $product = Product::create([
        'categories_id' => $data['categories_id'],
        'users_id' => Auth::user()->id,
        'name' => $data['name'],
        'slug' => $data['slug'],
        'description' => $data['categories_id'],
        'price' => $data['price'],
      ]);
      

      $file_name = $req->file('thumnails')->store('assets/products', 'public');
      Image::create([
        'products_id' => $product->id,
        'file_name' => $file_name,
      ]);

      return redirect()->route('dashboard-product');
    }

    public function deleteImage($id) {
        $image = Image::findOrFail($id);

        $idF = $image->products_id;
        $image->delete();
      
        return redirect()->route('dashboard-product-detail',  $idF);
    }

    public function update(ProductRequest $req, $id) {
        $data = $req->all();
        $data['slug'] = Str::slug($req->name);

        $update = Product::findOrFail($id);

        $update->update($data);

        return redirect()->route('dashboard-product');
    }

    public function uploadImage(ImageRequest $req, $id) {
      $file_name = $req->file('thumnails')->store('assets/products', 'public');
      Image::create([
        'products_id' => $id,
        'file_name' => $file_name,
      ]);

      return redirect()->route('dashboard-product-detail', $id);
    }
}
