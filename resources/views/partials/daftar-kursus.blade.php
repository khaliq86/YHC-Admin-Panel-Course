@extends('dashboard')
@section('title', 'Daftar Kursus')
@section('content')
<!-- Content Wrapper. Contains page content -->

<a href="{{route('form-kursus')}}" class="btn btn-success mb-2">Tambah</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Durasi</th>
        <th scope="col" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($kursus as $kursus)
      <tr>
        <th scope="row">{{$no++}}</th>
        <td>{{$kursus->judul}}</td>
        <td>{{$kursus->deskripsi}}</td>
        <td>{{$kursus->durasi}} Menit</td>
        <td class="text-center">
          <a href="{{route('daftar-detail-kursus', $kursus->id)}}" class="btn btn-primary">Daftar Materi</a>
            <a href="{{route('edit-kursus', $kursus->id)}}" class="btn btn-warning">Edit</a>
            <a href="{{route('hapus-kursus', $kursus->id)}}" class="btn btn-danger" id="delete">Hapus</a>
      </tr>
        @endforeach
    </tbody>
  </table>
@endsection