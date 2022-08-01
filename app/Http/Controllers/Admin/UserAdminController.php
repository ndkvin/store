<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Http\Requests\Admin\UserRequest\CreateUserRequest;
use App\Http\Requests\Admin\UserRequest\UpdateUserRequest;

class UserAdminController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      if(Request()->ajax()) {
        $query = User::query();
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
                      <a class="dropdown-item" href="' . route('user.edit', $item->id) . '">
                        Sunting
                      </a>
                      <form action="' . route('user.destroy', $item->id) . '" method="POST">
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

      return view('pages.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pages.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
      $data = $request->all();

      $data['password'] = bcrypt($data['password']);

      User::create($data);

      return redirect()->route('user.index');
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
        $data = User::findOrFail($id);
        return view('pages.admin.user.edit', [
          'item' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
      $data = $request->all();

      // if user edit the password
      if($data["password"]) {
        $data["password"] = bcrypt($data["password"]);
      } else {
        unset($data["password"]);
      }

      $item = User::findOrFail($id);

      $item->update($data);

      return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = User::findOrFail($id);
      $data->delete();
      return redirect()->route('user.index');
    }
}
