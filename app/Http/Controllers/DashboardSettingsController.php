<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\User;
use App\Http\Requests\StoreRequest;
use App\Models\Category;

class DashboardSettingsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function store() {
      $store = Store::where('users_id', Auth::user()->id)->get();

      $categories = Category::all();

      return view('pages.dashboard-settings', [
        'store' => $store,
        'categories' => $categories
      ]);
    }



    public function account() {
        $user =  User::where('id', Auth::user()->id)->firstOrFail();


        return view('pages.dashboard-account', [
          'user' => $user,
        ]);
    }

    public function redirectStore(StoreRequest $req, $redirect) {
        $store = Store::where('users_id', Auth::user()->id)->get();

        $store->first()->update($req->all());

        return redirect()->route($redirect);
    }

    public function redirectAcc() {

    }
}
