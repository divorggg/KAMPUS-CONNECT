<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\mahasiswa;
use App\Models\pekerjaan;
use App\Models\perusahaan;
use App\Models\lamaran;
use App\Models\DetailMhs;
use Illuminate\Support\Facades\Storage;

class mhsController extends Controller
{
    public function dasboard()
    {
        if (!Auth::check()) {
            return view('in/login');
        }
        $mhs =  mahasiswa::where('id', Auth::id())->first();
        $perusahaan = Perusahaan::with(['pekerjaan' => function ($query) {
            $query->where('status', 'aktif');
        }])->get();
        return view('mhs/dasboard', ['mahasiswa' => $mhs, 'perusahaan' => $perusahaan]);
    }
    public function profil()
    {
        if (!Auth::check()) {
            return view('in/login');
        }
        $mhs =  mahasiswa::where('id', Auth::id())->first();
        $pekerjaan = DetailMhs::where('idmhs', Auth::id())->where('tipe', 'pekerjaan')->get();
        $pendidikan = DetailMhs::where('idmhs', Auth::id())->where('tipe', 'pendidikan')->get();
        $pengalaman = DetailMhs::where('idmhs', Auth::id())->where('tipe', 'kemampuan')->get();

        // var_dump($mhs);
        return view('mhs/profil', [
            'mahasiswa' => $mhs,
            'pekerjaan' => $pekerjaan,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
        ]);
    }
    public function upprofil(Request $req)
    {
        // uptae mahasiswa dengfan id = 1
        $mhs = mahasiswa::where('id', Auth::id())->update([
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'no_hp' => $req->no_hp,
            'job' => $req->job,
        ]);
        $req->validate([
            'pp' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'pp.image' => 'File harus berupa gambar.',
            'pp.mimes' => 'File harus memiliki format jpeg, png, jpg, atau gif.',
            'pp.max' => 'Ukuran file maksimal adalah 2048 KB.',
        ]);

        // Mendapatkan ID dari Auth::id()
        $id = Auth::id();
        if ($req->hasFile('pp')) {
            echo 'tes 1';
            $foto = $req->file('pp');
            $extension = $foto->getClientOriginalExtension(); // Mendapatkan ekstensi file asli
            $namaFoto = uniqid() . '.' . $extension; // Menyimpan nama file dengan ekstensi yang sama
            $foto->storeAs('public/file/' . Auth::id(), $namaFoto);

            // Simpan informasi file ke database jika diperlukan
            $mhs = mahasiswa::where('id', Auth::id())->update([
                'pp' => 'file/' . Auth::id() . '//' . $namaFoto,
            ]);
        }
        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
    public function uppengalaman(Request $req)
    {
        $reqs = $req->all();
        var_dump($reqs);

        $detailmhs = DetailMhs::create([
            'idmhs' => Auth::id(),
            'name' => $req->name,
            'kantor' => $req->kantor,
            'rentang' => $req->rentang,
            'detail' => $req->detail,
            'tipe' => $req->tipe,
        ]);
        return redirect()->back()->with('success', 'Pengalaman pekerjaan berhasil diperbarui.');
    }
    public function uppendidikan(Request $req)
    {
        $reqs = $req->all();
        var_dump($reqs);

        $detailmhs = DetailMhs::create([
            'idmhs' => Auth::id(),
            'name' => $req->name,
            'kantor' => $req->kantor,
            'rentang' => $req->rentang,
            'tipe' => $req->tipe,
        ]);
        return redirect()->back()->with('success', 'Pendidikan berhasil diperbarui.');
    }
    public function upkemampuan(Request $req)
    {
        $reqs = $req->all();
        var_dump($reqs);

        $detailmhs = DetailMhs::create([
            'idmhs' => Auth::id(),
            'name' => $req->name,
            'tipe' => $req->tipe,
            'detail' => $req->detail,
        ]);
        return redirect()->back()->with('success', 'Pendidikan berhasil diperbarui.');
    }
    public function delkemampuan($p)
    {
        if (!Auth::check()) {
            return view('in/login');
        }
        $del = DetailMhs::where('idmhs', Auth::id())
            ->where('id', $p)
            ->delete();
        return redirect()->back()->with('success', 'Data kemampuan berhasil dihapus.');
    }
    public function delpengalaman($p)
    {
        if (!Auth::check()) {
            return view('in/login');
        }
        $del = DetailMhs::where('idmhs', Auth::id())
            ->where('id', $p)
            ->delete();
        return redirect()->back()->with('success', 'Data pengalaman berhasil dihapus.');
    }
    public function delpendidikan($p)
    {
        if (!Auth::check()) {
            return view('in/login');
        }
        $del = DetailMhs::where('idmhs', Auth::id())
            ->where('id', $p)
            ->delete();
        return redirect()->back()->with('success', 'Data pendidikan berhasil dihapus.');
    }
}
