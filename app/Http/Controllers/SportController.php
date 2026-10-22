<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    // Halaman Beranda (Menampilkan banner + 3 highlight item populer)
    public function home()
    {
        $featuredSports = Sport::take(3)->get();
        return view('sports.home', compact('featuredSports'));
    }

    // Halaman Katalog Utama (Menampilkan seluruh 15 item olahraga/kegiatan)
    // Halaman Katalog Utama (Menampilkan 6 item olahraga per halaman)
    public function index()
    {
        $sports = Sport::paginate(6);
        return view('sports.index', compact('sports'));
    }

    // Halaman Detail Item (Mengambil data spesifik berdasarkan ID)
    public function show($id)
    {
        $sport = Sport::findOrFail($id);
        return view('sports.show', compact('sport'));
    }

    // Halaman Tentang / Profil UTS & Sosmed
    public function about()
    {
        return view('sports.about');
    }

    
}