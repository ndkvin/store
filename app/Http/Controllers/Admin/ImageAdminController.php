<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageRequest;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Product;

class ImageAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Request()->ajax()) {
        $query = Image::with(['product']);
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
                      <form action="' . route('image.destroy', $item->id) . '" method="POST">
                          ' . method_field('delete') . csrf_field() . '
                        <button type="submit" class="dropdown-item text-danger">
                          Hapus
                        </button>
                      </form>
                    </div>
                  </div>
                </div>';
              })
              ->editColumn('file_name', function ($item) {
                  return $item->file_name ? '<img src="' . Storage::url($item->file_name) . '" style="max-height: 40px;"/>' : '';
                })
              ->rawColumns(['action', 'file_name'])
              ->make();
      }

      return view('pages.admin.image.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        return view('pages.admin.image.create', [
          'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
      $data = $request->all();

      $data['file_name'] = $request->file('file_name')->store('assets/products', 'public');

      Image::create($data);

      return redirect()->route('image.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Image::findOrfail($id);
        $data->delete();

        return redirect()->route('product.index');
    }
}
