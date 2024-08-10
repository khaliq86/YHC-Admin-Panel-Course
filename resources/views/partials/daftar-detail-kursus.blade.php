@extends('dashboard')
@section('title', 'Daftar Materi')
@section('content')
<!-- Content Wrapper. Contains page content -->

<a href="{{route('form-materi')}}" class="btn btn-success mb-2">Tambah</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kursus</th>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Link</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($materies as $materi)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$materi->kursus->judul}}</td>
      <td>{{$materi->judul}}</td>
      <td>{{$materi->deskripsi}}</td>
      <td><iframe width="200" height="150" src="{{$materi->link_embed}}" frameborder="0" allowfullscreen></iframe></td>
      <td>
        <a href="{{route('edit-materi', $materi->id)}}" class="btn btn-warning">Edit</a>
      <a href="{{route('hapus-materi', $materi->id)}}" class="btn btn-danger" id="delete">Hapus</a>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('kursus')}}" class="btn btn-danger">Kembali</a>
@endsection
