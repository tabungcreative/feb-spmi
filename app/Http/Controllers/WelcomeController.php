<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Berita;
use App\Models\DokumenMutu;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Pengumuman;
use App\Models\PenjaminanMutu;
use App\Services\DokumenMutuService;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    private DokumenMutuService $dokumenMutuService;

    public function __construct(DokumenMutuService $dokumenMutuService)
    {
        $this->dokumenMutuService = $dokumenMutuService;
    }

    public function index() {
        $pengumuman = \App\Models\Pengumuman::paginate(3);
        $berita = \App\Models\Berita::orderBy('created_at', 'DESC')->paginate(10);
        $penjaminanMutu = \App\Models\PenjaminanMutu::orderBy('id', 'DESC')->paginate(100);
        $audit = Audit::paginate(10);

        return response()->view('welcome.index' ,compact('pengumuman', 'berita', 'penjaminanMutu', 'audit'));
    }

    public function detailBerita($id) {
        $berita = Berita::find($id);
        $listBerita = \App\Models\Berita::orderBy('created_at', 'DESC')->paginate(3);
        return response()->view('welcome.detail-berita', compact('berita', 'listBerita'));
    }

    public function detailPengumuman($id) {
        $pengumuman = Pengumuman::find($id);
        $listPengumuman = \App\Models\Pengumuman::orderBy('created_at', 'DESC')->paginate(3);
        return response()->view('welcome.detail-pengumuman', compact('pengumuman', 'listPengumuman'));
    }

    public function dokumenMutu(Request $request, $id) {
        $key = $request->input('key') ?? '';
        $data = $this->dokumenMutuService->listById($id, $key, 10);
        $penjaminanMutu = PenjaminanMutu::find($id);

        return response()->view('welcome.dokumen-mutu', compact( 'data', 'penjaminanMutu'));
    }

    public function detailDokumenMutu($id) {
        $dokumenMutu = DokumenMutu::find($id);
        return response()->view('welcome.detail-dokumen-mutu', compact('dokumenMutu'));
    }

    public function penelitian() {
        $penelitian = Penelitian::paginate(10);

        return response()->view('welcome.penelitian', compact('penelitian'));
    }

    public function pengabdian() {
        $pengabdian = Pengabdian::paginate(10);

        return response()->view('welcome.pengabdian', compact('pengabdian'));
    }
}
