<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function MaosUser(){


        if(Auth::user()-> role != "client"){
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

    public function MaosProfile($id){
        $title = 'Profile';
        $data = User::find($id);

        return view('/layouts/profile/profile', [
            'title'=> $title
        ], compact('data'));

    }

    public function NdamelUser(Request $request)
    {
        $post = $request->request->all();

        if($post['id'] == null){
            $simpan = new User();
            $simpan->password = Hash::make($post['password']);
            $simpan->role = $post['role'];
        }
        else {
            $simpan = User::find($post['id']);
            $simpan->tanggal_lahir = $post['tanggal_lahir'];
            $simpan->alamat = $post['alamat'];
            $simpan->bio = $post['bio'];
        }
        $simpan->name = $post['name'];
        $simpan->email = $post['email'];
        $simpan->save();

        return back()->with('success', 'Data Berhasil Disimpan');

    }

    public function HapusUser(Request $request){
        $post = $request->request->all();
        $model = User::find($post['id']);
        $model->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

    public function GantosPassword(Request $request)
    {
        $post = $request->request->all();
        $current_password = Auth::User()->password; 
        if(Hash::check($post['password_lama'], $current_password)) { 
            $passwordbaru = $post['password_baru'];
            $konfirmasipassword = $post['konfirmasi_password'];
            if ($passwordbaru == $konfirmasipassword) {
                $simpan = User::find($post['id']);
                $simpan->password = Hash::make($post['password_baru']);
                $simpan->save();
                return back()->with('success', 'Password Berhasil Diubah');
            }else {
                return back()->with('danger', 'Password Baru Tidak Cocok');
            }
        }
        else{
            return back()->with('danger', 'Password Lama Salah');
        }
    }

}
