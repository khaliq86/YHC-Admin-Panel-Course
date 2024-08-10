@extends('dashboard')
@section('title', 'Tambah Kursus')
@section('content')
<!-- Content Wrapper. Contains page content -->

        <form action="{{route('tambah-kursus')}}" method="POST">
            @csrf
            <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
            </div>
            <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="text" class="form-control" id="durasi" name="durasi" placeholder="dalam menit">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{route('kursus')}}" class="btn btn-danger">Kembali</a>
        </form>
@endsection