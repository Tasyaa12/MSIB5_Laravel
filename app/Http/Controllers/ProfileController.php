<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $name = 'Universitas Bani Saleh';
    $deskripsi = 'Universitas Bani Saleh saat ini memiliki 3 Kampus (Gedung) yang beralamatkan 
    di Jl. Mayor M. Hasibuan No 68, Margahayu, Bekasi Timur, Kota Bekasi, Jawa Barat 17113
    Universitas Bani Saleh, bernaung di bawah Yayasan Bani Saleh, didirikan pada tanggal 
    18 September 1989 di Bekasi, oleh seorang ulama intelektual dr. H. M. Subki Abdulkadir';
    $img = public_path() . 'assets/img/logo.jpeg';

    $data['name'] = $name;
    $data['deskripsi'] = $deskripsi;
    $data['img'] = $img;

    return view('profile/index', $data);
  }

  public function landing()
  {
    return view('landing/index');
  }
}
