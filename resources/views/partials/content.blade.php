@extends('dashboard')
@section('title', 'Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$totalKursus}}<sup style="font-size: 20px"></sup></h3>
  
                  <p>Total Kursus</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('kursus')}}" class="small-box-footer">Info lebih lengkap <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$totalMateri}}</h3>
  
                  <p>Total Materi</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{route('daftar-materi')}}" class="small-box-footer">Info lebih lengkap <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
            </section>
            <!-- right col -->
          </div>

@endsection