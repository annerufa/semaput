<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>
<body>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<img id="background" src="{{ URL::asset('image/background.jpg') }}">
	<div id="atas-home">
		<div class="ui grid">
	  		<div class="three wide column">
	  			<div class="ilogo1"> <img class="ilogo2" src="{{ URL::asset('image/logosemaputpadi.png') }}">
				<div class="tlogo2"> <span class="ku rb">SEMAPUT-PADI</span></div></div>
	  		</div>
	  		<div class="two wide column">
	  		</div>
	  		<div class="six wide column" style=" margin-top: 5vh; margin-left: 125px;">
				<p><div class="trekap"><div class="t3"><span class="ku2">DAFTAR</span> <span class="ku"> ANGGOTA</span></div></div></p>
	  		</div><div class="one wide column"></div>
	  		<div class="two wide column">
	  		<div class="profil"> <img class="img-profil1" src="{{ URL::asset('/image/girl.png') }}" > 
  				<div style="position: relative;"">
					  <button class="ui inverted green button">Logout</button>
				</div>
			</div>
	  		</div>
	  	</div>
	</div>
					@if(Session::has('alert-success'))
					    <div class="alert alert-success">
				            {{ Session::get('alert-success') }}
				        </div>
					@endif
	<div class="menu-rekap" style="margin-top: 70px;">
		<div class="ui grid">
	  		<div class="ten wide column" style="margin-left: 40px;">	
	  			<a href="{{ route('anggota.create') }}">
	  			 <button class="ui green button">
  					Rekap Pupuk
				</button>	</a>
				<table class="ui  striped  table">
				  <thead style="text-align: center;">
				    <tr >
				      <th >No Anggota</th>
				      <th >Nama</th>
				      <th >Alamat</th>
				      <th >Tgl Lahir</th>
				      <th >Telepon</th>
				      <th >Aksi</th>
				    </tr>
				  </thead>
				  <tbody style="text-align: center;">
				  <?php $no=1; ?>
					@foreach($anggotas as $anggotas)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$anggotas->nama_petani}}</td>
							<td>{{$anggotas->alamat}}</td>
							<td>{{$anggotas->tgl_lahir}}</td>
							<td>{{$anggotas->tlp}}</td>
							<td>
							<form method="POST" action="{{ route('anggota.destroy', $anggotas->id_petani) }}" accept-charset="UTF-8">
				                <input name="_method" type="hidden" value="DELETE">
				                <input name="_token" type="hidden" value="{{ csrf_token() }}">
							    		<input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" class="ui red button" tabindex="0" value="Hapus"
										/> 
				            </form>
					    </td>
				    </tr>
				    @endforeach
				    </tbody>
				</table>
 
					<div style="margin-top: 10px; text-align: center;">
					<div class="ui grid">
				  		<div class="sixteen wide column">
				  		<button class="ui blue button">
						  	Sebelum
							</button>
				  			<button class="ui blue icon button">
						  	Selanjutnya
							</button>
				  		</div>
				  		</div>
					</div>
			</div>
	  		<div class="five wide column">
	  			<div class="ui container" style="background-color: #1BBC9B;border-radius: 10px;">
	  					<div class="login-judul" style="padding-top: 15px; text-align: center;margin-right: 10px;margin-bottom: 0 px;">
							<span class="judulform" style="color: #F9BF3B;">
								Tambah Anggota
							</span>	
						</div>
	  			<div class="form-anggota" style="padding: 11px;">
	  			<form action="{{route('anggota.store')}}" method="post">
					{{csrf_field()}}
						<div class="ui fluid input focus{{ $errors->has('nama_petani') ? ' has-error' : '' }}" style="margin: 9px auto;">
							<input type="text" name="nama_petani" class="" placeholder="Nama Petani">
							{!! $errors->first('nama_petani', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="ui fluid input focus{{ $errors->has('alamat') ? ' has-error' : '' }}" style="margin: 3px auto;">
							<input type="text" name="alamat" class="form-control" placeholder="Alamat">
							{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="ui fluid input focus{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}" style="margin: 9px auto;width: 48%; float: left;">
							<input type="text" name="tgl_lahir" class="form-control" placeholder="YY/MM/HH">
							{!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="ui fluid input focus{{ $errors->has('tlp') ? ' has-error' : '' }}" style="margin: 9px auto; width: 48%; float: right;">
							<input type="text" name="tlp" class="form-control" placeholder="Telepon">
							{!! $errors->first('tlp', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="ui fluid input focus{{ $errors->has('username') ? ' has-error' : '' }}" style="margin: 9px auto;width: 48%; float: left;">
							<input type="text" name="username" class="form-control" placeholder="Username">
							{!! $errors->first('username', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="ui fluid input focus{{ $errors->has('password') ? ' has-error' : '' }}" style="margin: 9px auto;width: 48%; float: right;">
							<input type="text" name="password" class="form-control" placeholder="Password">
							{!! $errors->first('password', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<input type="submit" value="Simpan" class="fluid ui button" style="height: 40px;background-color: #F9BF3B;">
						</div>
					</form>
				</div>
				</div>
	  		</div>
	  	</div>
	</div>	
</body>
<footer>
      <div class="versi">
        Recently, v0.3
      </div>
      <div class="team">
        by : Yovanka Adam, Anne Rufaedah, Riya Alvianita, Reny Rizqiyatus S.
      </div>
      <div class="for">
        pplagro2016
      </div>
	</footer>


</html>