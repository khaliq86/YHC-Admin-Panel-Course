@extends('dashboard')
@section('title', 'Update Materi')
@section('content')
<!-- Content Wrapper. Contains page content -->

        <form action="{{route('update-materi', ['id' => $id])}}" method="POST">
            @csrf
            <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{$materi->judul}}">
            </div>
            <div class="mb-3">
<label for="kursus" class="form-label">Kursus</label>
<select name="kursus_id" id="kursus" class="form-control">
    <option value="">Pilih Kursus</option>
    @foreach ($kursuses as $kursus)
    <option value="{{ $kursus->id }}" {{ $materi->kursus_id == $kursus->id ? 'selected' : '' }}>
        {{ $kursus->judul }}
    </option>
    @endforeach
</select>
            </div>
            <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$materi->deskripsi}}">
            </div>
            <div class="mb-3">
            <label for="durasi" class="form-label">Link Embed</label>
            <input type="text" class="form-control" id="link_embed" name="link_embed" placeholder="Salin Link">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('daftar-materi')}}" class="btn btn-danger">Batal</a>
        </form>
@endsection