<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan semua user
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    // Menampilkan form tambah user
    public function create()
    {
        return view('users.create');
    }

    // Menyimpan user baru
    public function store(Request $request)
    {
        // Validasi input form jika diperlukan

        User::create($request->all());
        return redirect('/users')->with('success', 'User berhasil ditambahkan!');
    }

    // Menampilkan detail user
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    // Menampilkan form edit user
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    // Update data user
    public function update(Request $request, User $user)
    {
        // Validasi input form jika diperlukan

        $user->update($request->all());
        return redirect('/users')->with('success', 'User berhasil diperbarui!');
    }

    // Menghapus userph
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('success', 'User berhasil dihapus!');
    }
}
