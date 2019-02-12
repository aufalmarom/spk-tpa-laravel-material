<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function MaosUser(){


        if(Auth::user()-> role != "operator"){
            //Eloquent ORM
            $db = User::get();

            $data =[
                'data' => 'iki data',
                'title' => 'Data',
                'user' => $db
            ];

            return view('/layouts/user/user', $data);
        }
        else{
            return view('/notfound');
        }
        //Query Builder
        // $db = DB::table('atributs')->get();

    }

    public function NdamelUser(Request $request)
    {
        $post = $request->request->all();

        $simpan = new User();
        $simpan->name = $post['name'];
        $simpan->email = $post['email'];
        $simpan->password = Hash::make($post['password']);
        $simpan->role = $post['role'];
        $simpan->save();

        return back()->with('success', 'Data Berhasil Disimpan');

    }

    public function HapusUser(Request $request){
        $post = $request->request->all();
        $model = User::find($post['id']);
        $model->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }


}
