@extends('dashboard')
@section('title', 'Tambah Materi')
@section('content')
<!-- Content Wrapper. Contains page content -->

        <form action="{{route('tambah-materi')}}" method="POST">
            @csrf
            <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="mb-3">
<label for="kursus" class="form-label">Kursus</label>
<select name="kursus_id" id="kursus" class="form-control">
    <option value="">Pilih Kursus</option>
    @foreach ($kursuses as $kursus)
        <option value="{{ $kursus->id }}">{{ $kursus->judul }}</option>
    @endforeach
</select>
            </div>
            <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
            </div>
            <div class="mb-3">
            <label for="durasi" class="form-label">Link Embed</label>
            <input type="text" class="form-control" id="durasi" name="link_embed" placeholder="Salin Link">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{route('daftar-materi')}}" class="btn btn-danger">Kembali</a>
        </form>
@endsection