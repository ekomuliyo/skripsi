<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cabang;

class CabangUsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $cabang = Cabang::where('id_user', $user->id);

        $cabang->update([
            'alamat' => $request->input('cabang')['alamat'],
            'no_hp' => $request->input('cabang')['no_hp'],
        ]);
               
        $password = $request->get('password') ? bcrypt($request->get('password')) : $user->password;
        $foto = $request->input('foto');

        $user->update([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => $password,
            'foto' => $foto,
        ]);

        return redirect()->back()->with('alert', 'Data profil berhasil diubah!');
    }

}
