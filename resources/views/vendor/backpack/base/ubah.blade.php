 @extends('backpack::layout')

@section('header')
 <div class="panel panel-default">
              <div class="panel-heading turqoise"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp Tambah Data Siswa</div>
					@if(Session::has('message'))
					   <div class="alert alert-success">
					  		{{ Session::get('message') }}
					    </div>
					@endif
				
				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif

              <div class="panel-body">
            <form action="{{ url('/dashboard/ubah/'.$siswa->id) }}" method="post" enctype="multipart/form-data"> 
            		<input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
				  
					  <div class="form-group">
					   <label>NIS</label>
					    <input required type="number" name="nis" class="form-control" value="{{$siswa->nis}}" placeholder="Nis">
					  </div>

						
					  <div class="form-group">
					   <label>Nama</label>
					    <input required type="text" name="nama" class="form-control" value="{{$siswa->nama}}" placeholder="Nama">
					  </div>
		

 						<div class="form-group">
					   <label>jurusan</label>
					   <div>
					    <select name="jurusan">
					    	<option value="Elektronika AV">Elektronika AV</option>
					    	<option value="Otomotif">Otomotif</option>
					    	<option value="Akutansi">Akutansi</option>
					    	<option value="Multimedia">Multimedia</option>
					    	  <option value="{{$siswa->jurusan}}" selected>{{$siswa->jurusan}}</option>
					    </select>
					    </div>
					  </div>

					  	<div class="form-group">
					   <label>kelas</label>
					   <div>
					    <select name="kelas">
					    	<option value="X">X</option>
					    	<option value="XI">XI</option>
					    	<option value="XII">XII</option>
					    	  <option value="{{$siswa->jenis_kelamin}}" selected>{{$siswa->kelas}}</option>
					    </select>
					    </div>
					  </div>

 						<div class="form-group">
					   <label>agama</label>
					   <div>
					    <select name="agama">
					    	<option value="ISLAM">ISLAM</option>
					    	<option value="KRISTEN">KRISTEN</option>
					    	<option value="BUDHA">BUDHA</option>
					    		
					    	  <option value="{{$siswa->jenis_kelamin}}" selected>{{$siswa->agama}}</option>
					    </select>
					    </div>
					  </div>

					  <div class="form-group">
					   <label>jenis_kelamin</label>
					   <div>
					    <select name="jenis_kelamin">
					 	
					    	<option value="Laki-Laki">Laki-Laki</option>
					    	<option value="Perempuan">Perempuan</option>
					    	  <option value="{{$siswa->jenis_kelamin}}" selected>{{$siswa->jenis_kelamin}}</option>
					    		
					    </select>
					    </div>
					  </div>

					  <div class="form-group">
					   <label>Alamat</label>
					    <input required type="text" name="alamat" class="form-control" value="{{$siswa->alamat}}" placeholder="Alamat">
					  </div>

					   <div class="form-group">
					    <label>Tahun Masuk</label>
					    <input required type="number"  name="tahun_masuk" class="form-control" value="{{$siswa->tahun_masuk}}" placeholder="Tahun Masuk">
					  </div>


					<div class="well">
					 <label>Tanggal Lahir</label>
					  <div id="datetimepicker5" class="input-append">
					    <input name="tanggal_lahir" placeholder="Tanggal Lahir" required="" value="{{$siswa->tanggal_lahir}}" data-format="yyyy-MM-dd" type="text"></input>
					    <span class="add-on">
					      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
					      </i>
					    </span>
					  </div>
					</div>

					  <div class="form-group">
					   <label>Tempat Lahir</label>
					    <input required type="text" name="tempat_lahir" class="form-control" value="{{$siswa->tempat_lahir}}" placeholder="Tempat Lahir">
					  </div>
							
					  <div class="form-group">
					    <input type="Submit" class="btn btn-success " value="Simpan" >
					  </div>
				  </div>
		      </form>
			</div>  
			</div>		
@endsection
@section('after_scripts')
 <script type="text/javascript">
  $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    $('#datetimepicker5').datetimepicker({
      pickTime: false
    });
  });
</script>
@endsection

