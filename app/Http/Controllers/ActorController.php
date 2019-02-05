<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ActorController extends Controller
{
    // public function login(Request $request)
    // {
    //     $password = $request['password'];
    //     $actor = Actor::where('username', $request['username'])->get();
    //     if (count($actor) == 1) {
    //         foreach ($actor as $key) {
    //             if (Hash::check($password, $key->password)) {

    //                 session([
    //                     'username' => $request['username'],
    //                     'fullname' => $key->fullname
    //                 ]);
    //                 if ($key ->access_level== 'Administrator') {
    //                     return redirect('/administrator/dashboard');
    //                 }elseif ($key ->access_level == 'Manager') {
    //                     return redirect('/manager/dashboard');
    //                 }else{
    //                     return redirect('user/dashboard');
    //                 }
    //             }else{
    //                 return redirect()->back()->with('Gagal', 'Password Salah');
    //             }
    //         }
    //     }else{
    //         return redirect()->back()->with('Gagal', 'Username Salah');
    //     }
    // }

    public function logout()
    {
        $session = array(
            'nama'  => session('nama'),
            'user'  => session('user'),
        );
        $hancur = session()->flush();
        // dd($hancur);
        return redirect('/login')->with('sukses','Anda berhasil keluar');
    }
}
