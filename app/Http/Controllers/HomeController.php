<?php

namespace App\Http\Controllers;

use App\Models\FileDokumen;
use App\Models\PaperIlmiah;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Pengumuman;
use App\Models\PenjaminanMutu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('custom-auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Dashboard';
        $totalFileDokumen = FileDokumen::all()->count();
        $totalPenjaminanMutu = PenjaminanMutu::all()->count();
        $pengumuman = Pengumuman::paginate(3);
        $penelitian = Penelitian::get();
        $pengabdian = Pengabdian::get();
        $paperIlmiah = PaperIlmiah::get();
        return view('home', compact(
            'totalFileDokumen',
            'totalPenjaminanMutu',
            'title',
            'pengumuman',
            'penelitian',
            'pengabdian',
            'paperIlmiah'
        ));
    }
}
