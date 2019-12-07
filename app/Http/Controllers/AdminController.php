<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class AdminController extends Controller
{
    public function index()
    {
        $siswa= Siswa::all();

        return view('pages.index')->with('siswa', $siswa);
    }

    public function tambah(){
        return view('pages.add');
    }

    public function store(Request $request){
        $siswa = new Siswa();
    	$siswa->Nama = $request->Nama;
    	$siswa->no_hp = $request->no_hp;
    	$siswa->email = $request->email;
    	$siswa->save();
        return redirect('/');

    }

    public function updatedata(Request $request)
    {
        DB::table('siswa')->where('id',$request->id)->update([
            'Nama' => $request->Nama,
            'no_hp' =>$request->no_hp,
			'email' => $request->email,
		]);
        return redirect('/');
    }

    public function hapusdata($id)
    {
    	Siswa::where('id',$id)->delete();
    	return redirect('/');
    }

    public function edit($id){
        $siswa = Siswa::where('id',$id)->get();
        return view('pages.edit',['siswa'=> $siswa]);
    }

}
