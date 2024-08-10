<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\Materis;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKursus = Kursus::count();
        $totalMateri = Materis::count();
        return view('partials.content', compact('totalKursus', 'totalMateri'));
    }

    public function kursus()
    {
        $kursus = Kursus::get()->all();
        return view('partials.daftar-kursus', compact('kursus'));
    }

    public function formKursus()
    {
        return view('partials.tambah-kursus');
    }

    public function tambahKursus(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required',
        ]);

        $namaKursus = $request->judul;
        $deskripsi = $request->deskripsi;
        $durasi = $request->durasi;

        Kursus::create([
            'judul' => $namaKursus,
            'deskripsi' => $deskripsi,
            'durasi' => $durasi,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return view('partials.tambah-kursus');
    }

    public function editKursus($id)
    {
        $kursus = Kursus::find($id);
        $id = $kursus->id;
        return view('partials.edit-kursus', compact('kursus', 'id'));
    }

    public function updateKursus(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required',
        ]);

        $namaKursus = $request->judul;
        $deskripsi = $request->deskripsi;
        $durasi = $request->durasi;

        Kursus::where('id', $id)
            ->update([
                'judul' => $namaKursus,
                'deskripsi' => $deskripsi,
                'durasi' => $durasi,
                "updated_at" => now(),
            ]);

        return redirect()->route('kursus');
    }

    public function hapusKursus($id)
    {
        Kursus::where('id', $id)->delete();
        return redirect()->route('kursus');
    }

    public function detailKursus($id)
    {
        $kursus = Kursus::find($id);
        $materies = Materis::where('kursus_id', $id)->get()->all();
        return view('partials.daftar-detail-kursus', compact('kursus', 'materies'));
    }

    public function daftarMateri()
    {
        $materies = Materis::get()->all();
        return view('partials.daftar-materi', compact('materies'));
    }

    public function formMateri()
    {
        $kursuses = Kursus::get()->all();
        return view('partials.form-materi', compact('kursuses'));
    }

    public function tambahMateri(Request $request)
    {
        $request->validate([
            'kursus_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'link_embed' => 'required',
        ]);

        $kursuses = Kursus::get()->all();

        $judul = $request->judul;
        $deskripsi = $request->deskripsi;
        $link_embed = $request->link_embed;
        $kursus_id = $request->kursus_id;

        Materis::create([
            'kursus_id' => $kursus_id,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'link_embed' => $link_embed,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return view('partials.form-materi', compact('kursuses'));
    }

    public function editMateri($id)
    {
        $materi = Materis::find($id);
        $kursuses = Kursus::get()->all();
        $id = $materi->id;
        return view('partials.edit-materi', compact('materi', 'kursuses', 'id'));
    }

    public function updateMateri(Request $request, $id)
    {
        $request->validate([
            'kursus_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'link_embed' => 'required',
        ]);

        $judul = $request->judul;
        $deskripsi = $request->deskripsi;
        $link_embed = $request->link_embed;
        $kursus_id = $request->kursus_id;

        Materis::where('id', $id)
            ->update([
                'kursus_id' => $kursus_id,
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'link_embed' => $link_embed,
                "updated_at" => now(),
            ]);

        return redirect()->route('daftar-materi');
    }

    public function hapusMateri($id)
    {
        Materis::where('id', $id)->delete();
        return redirect()->route('daftar-materi');
    }
}
