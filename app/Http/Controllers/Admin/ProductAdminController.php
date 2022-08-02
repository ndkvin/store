<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Facades\DB;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      if(Request()->ajax()) {
        $query = Product::with(['user', 'category']);
        return Datatables::of($query)
          ->addColumn('action', function ($item) {
              return '
                <div class="btn-group">
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                      type="button" id="action' .  $item->id . '"
                      data-toggle="dropdown" 
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      Aksi
                    </button>
                    <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                      <a class="dropdown-item" href="' . route('product.edit', $item->id) . '">
                        Sunting
                      </a>
                      <form action="' . route('product.destroy', $item->id) . '" method="POST">
                          ' . method_field('delete') . csrf_field() . '
                        <button type="submit" class="dropdown-item text-danger">
                          Hapus
                        </button>
                      </form>
                    </div>
                  </div>
                </div>';
              })
              ->rawColumns(['action'])
              ->make();
      }

      return view('pages.admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::all();
      $categories = Category::all();
      return view('pages.admin.product.create', [
        'users' => $users,
        'categories' => $categories,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
      $data = $request->all();
      $data['slug'] = Str::slug($request->name);

      Product::create($data);

      return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::with(['user', 'category'])->findOrFail($id);
        $users = User::all();
        $categories = Category::all();

        return view('pages.admin.product.edit', [
          'item' => $data,
          'users' => $users,
          'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
      $data = $request->all();

      $data['slug'] = Str::slug($request->name);

      $item = product::findOrFail($id);

      $item->update($data);

      return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Product::findOrFail($id);
      $data->delete();
      return redirect()->route('product.index');
    }
}
