<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class CategoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
          $query = Category::query();

          return DataTables::of($query)
              ->addColumn('action', function($item) {
                  return '
                      <div class="btn-group">
                          <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                  type="button"
                                  data-toggle="dropdown"

                              >
                                aksi
                              </button>
                              <div class="dropdown-menu">
                                  <a href="'. route('category.edit', $item->id) .'" class="dropdown-item">
                                      sunting
                                  </a>
                                  <form action="'. route('category.destroy', $item->id) .'" method="POST">
                                      <button type="submit" class="dropdown-item text-danger">
                                          
                                          '. method_field('delete') . csrf_field() .'
                                          Hapus
                                      </button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  ';
              })
            ->editColumn('image', function($item) {
                return $item->image ? '<img src="'. Storage::url($image->image) .'"/>' : "";
            })
            ->rawColum(['action', 'image'])
            ->make();
        }

        return view('pages.admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
