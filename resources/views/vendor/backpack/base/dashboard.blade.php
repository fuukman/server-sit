@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Daftar Seluruh Siswa</div>
                </div>
                <div class="container">
  <div class="table-responsive">
  <table class="table">
   {!! Session::has('msg') ? Session::get("msg") : '' !!}
  
    <thead>
      <tr>
       <th>NIS</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Agama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Tahun masuk</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
      </tr>
    </thead>
    <tbody>
     @foreach($siswa as $datas)
      <tr>
        <td><b>{{ $datas->nis }}</b></td>
        <td>{{ $datas->nama }}</td>
        <td>{{ $datas->jurusan }}</td>
        <td>{{ $datas->kelas }}</td>
        <td>{{ $datas->agama }}</td>
        <td>{{ $datas->jenis_kelamin }}</td>
        <td>{{ $datas->alamat }}</td>
        <td>{{ $datas->tahun_masuk }}</td>
        <td>{{ $datas->tanggal_lahir }}</td>
        <td>{{ $datas->tempat_lahir }}</td>
        <td><a href="{{url('dashboard/siswa/'.$datas->id)}}"><button type="button" class="btn btn-primary">Ubah</button></a></td>
        <td><a href="{{url('dashboard/hapus/'.$datas->id)}}"><button type="button" class="btn btn-danger">Hapus</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
@endsection
