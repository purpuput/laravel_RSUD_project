<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AppointmentModel;
use App\Models\ObatModel;
use File;

class AuthController extends Controller
{
    public function index(){
        return view ("appointment.home");
    }
    
    public function artikel(){
        return view ("appointment.artikel");
    }

    public function janjiTemuPost(){
        return view ("appointment.janjiTemu");
    }
    
    public function riwayat(){
        $data['request'] = AppointmentModel::all();                   
        return view("appointment.riwayat",$data)->with("request ",$data);
    }

    public function register(){
        return view ("appointment.register");
    }

    public function registerPost(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        return back()->with('success', 'Register successfully');
    }
    
    public function login(){
        return view ("appointment.login");
    }

    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)){
            return redirect('/janjiTemu')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }

    public function save(Request $request){
        
        $pasien = new AppointmentModel;
        $pasien->nama_lengkap = $request->nama_lengkap;
        $pasien->tempat_lahir = $request->tempat_lahir;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->alamat = $request->alamat;
        $pasien->no_identitas = $request->no_identitas;
        $pasien->no_hp = $request->no_hp;
        $pasien->penyakit = $request->penyakit;
        $pasien->dokter = $request->dokter;
        $dokter = $request->dokter;
        if ($dokter == 'DR. Rizal') {
            $biaya = 100000;
        } elseif ($dokter == 'DR. Rita') {
            $biaya = 150000;
        } elseif ($dokter == 'DR. Firman') {
            $biaya = 200000;
        } elseif ($dokter == 'DR. Sinta') {
            $biaya = 200000;
        } elseif ($dokter == 'DR. Mega') {
            $biaya = 200000;    
        } else {
            // Dokter tidak valid, atur biaya menjadi 0 atau berikan pesan kesalahan
            $biaya = 0;
            // atau redirect kembali ke halaman form dengan pesan kesalahan
            return redirect()->back()->with('error', 'Dokter tidak valid.');
        }   
        $pasien->dokter = $dokter;
        $pasien->tanggal_janjitemu = $request->tanggal_janjitemu;
        $pasien->biaya = $biaya;
        $pasien->save();
        return redirect()->route("janjiTemu");
    }

    public function beliObatPost(){                  
        return view("appointment.beliObat");
    }

    public function dataObat(){
        $data['request'] = ObatModel::all();                   
        return view("appointment.dataObat",$data)->with("request ",$data);   
    }

    public function obatSave(Request $request)
    {
    $obat = new ObatModel;
    $obat->nama_pembeli = $request->nama_pembeli;
    $obat->obat1 = $request->obat1;
    $obat->obat2 = $request->obat2;
    $obat->jumlah_obat1 = $request->jumlah_obat1;
    $obat->jumlah_obat2 = $request->jumlah_obat2;

    // Calculate the sum of jumlah_obat1 and jumlah_obat2
    $total_jumlah_obat = $request->jumlah_obat1 + $request->jumlah_obat2;

    $harga_obat = [
        'Paracetamol' => 5000,
        'Asam Mefenamat' => 7000,
        'Amoxilin' => 6000,
        'Paratusin' => 5500,
        'Dexa' => 8000,
    ];

    $biaya_total = 0;

    if (array_key_exists($request->obat1, $harga_obat)) {
        $harga_obat1 = $harga_obat[$request->obat1];
        $biaya_obat1 = $harga_obat1 * $request->jumlah_obat1;
        $biaya_total += $biaya_obat1;
    } else {
        return redirect()->back()->with('error', 'Obat 1 tidak valid.');
    }

    if (array_key_exists($request->obat2, $harga_obat)) {
        $harga_obat2 = $harga_obat[$request->obat2];
        $biaya_obat2 = $harga_obat2 * $request->jumlah_obat2;
        $biaya_total += $biaya_obat2;
    } else {
        return redirect()->back()->with('error', 'Obat 2 tidak valid.');
    }

    $obat->total_biaya = $biaya_total;
    $obat->total_jumlah_obat = $total_jumlah_obat; // Add the total_jumlah_obat to the model
    $obat->save();

    return redirect()->route('beliObat')->with('success', 'Data obat berhasil disimpan');
}

}   