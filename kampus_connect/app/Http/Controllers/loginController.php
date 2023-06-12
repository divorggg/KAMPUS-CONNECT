<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\mahasiswa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Session;

class loginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('mhs/dasboard');
        } else {
            return view('in/login');
        }
    }
    public function ceklogin(Request $req)
    {
        $data = [
            'email' => $req->input('email'),
            'password' => $req->input('password'),
        ];
        if (Auth::Attempt($data)) {
            return redirect('mhs/dasboard');
            // echo 'hai';
        } else {
            if (!User::where('email', $data['email'])->exists()) {
                $errors = ['email' => 'Email belum terdaftar.'];
            } else {
                $errors = ['email' => 'Email atau kata sandi salah.'];
            }
            return redirect()->back()->withErrors($errors)->withInput();
        }
    }
    public function daftar()
    {
        if (Auth::check()) {
            return redirect('mhs/profil');
        } else {
            return view('in/daftar');
        }
    }
    public function cekdaftar(Request $req)
    {
        $req->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
        $randomNumber = Str::random(4);

        $user = User::create([
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role' => "mahasiswa",
        ]);
        $user = mahasiswa::create([
            'id' => $user->id,
            'email' => $user->email,
        ]);

        $folderPath = 'public\file\\' . $user->id; // Ganti dengan path yang sesuai
        Storage::makeDirectory($folderPath);

        $req->session()->flash('pesan', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
