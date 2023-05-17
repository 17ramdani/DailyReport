<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin.user-index', compact('data'));
    }

    public function create()
    {
        return view('admin.user-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required|unique:users',
            'divisi' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'nik' => $request->input('nik'),
            'divisi' => $request->input('divisi'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->save();
        Alert::success('Success ', 'Data Berhasil Disimpan');
        return redirect()->route('user.index')->with('success', 'Data user berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $data = User::findOrFail($id);

        return view('admin.user-detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'divisi' => 'required',
            'role' => 'required',
            'email' => 'required|email',
        ]);

        $user->name = $validatedData['name'];
        $user->nik = $validatedData['nik'];
        $user->divisi = $validatedData['divisi'];
        $user->email = $validatedData['email'];
        $user->role = $validatedData['role'];

        $user->save();
        Alert::success('Success ', 'Data Berhasil Diupdate');
        return redirect()->route('user.index')->with('success', 'Data user berhasil di-update!');
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->delete();
        Alert::success('Success ', 'Data Berhasil Dihapus');
        return redirect()->route('user.index')->with('success', 'Data user berhasil di-Hapus!');
    }
}
