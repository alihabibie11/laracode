<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function pegawai()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('pages.pegawai', compact('pegawai'));
    }
    public function add_pegawai(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($data);
        $save = DB::table('pegawai')->insert($data);
        return redirect()->route('pegawai');
    }
    public function update_pegawai(Request $request)
    {
        $data = $request->all();
        $nip = $data['old_nip'];
        // dd($data);
        unset($data['_token']);
        unset($data['_method']);
        unset($data['old_nip']);
        DB::table('pegawai')->where('nip', $nip)->update($data);
        return redirect()->route('pegawai');
    }
    public function delete_pegawai($id)
    {
        DB::table('pegawai')->where('nip', $id)->delete();
        return redirect()->route('pegawai');
    }
}
