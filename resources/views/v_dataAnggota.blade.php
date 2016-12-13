<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/dataTables.semanticui.min.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.semanticui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#anggota').DataTable();
} );
    </script>
</head>
<body style="margin-bottom: 400px;" >

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<img id="background" src="{{ URL::asset('image/background.jpg') }}">
	<div id="atas-home">
		<div class="ui grid">
	  		<div class="three wide column">
	  			<div class="ilogo1"> <a href="{{URL('Ketua')}}"><img class="ilogo2" src="{{ URL::asset('image/logosemaputpadi.png') }}"></a>
				<div class="tlogo2"> <span class="ku rb">SEMAPUT-PADI</span></div></div>
	  		</div>
	  		<div class="two wide column">
	  		</div>
	  		<div class="six wide column" style=" margin-top: 5vh; margin-left: 125px;">
	  		<p><div class="trekap" style="font-family: 'Oswald', sans-serif;"><div class="t3"><span class="ku2">DAFTAR</span> <span class="ku"> ANGGOTA</span></div></div></p>
	  		</div><div class="one wide column"></div>
	  		<div class="two wide column">
	  			<a href="/logout">
  				<div style="position: relative;margin-left: 75px;">
					  <button class="ui inverted yellow button">Logout</button>
				</div>
				</a>
	  		</div>
	  	</div>
	</div>	
	<div class="menu-rekap" style="margin-top: 50px;">
		<div class="ui grid">
	  		<div class="ten wide column" style="margin-left: 40px;">	
				<table class="ui  striped  table" id="anggota" >
				  <thead style="text-align: center;">
				    <tr >
				      <th >No Anggota</th>
				      <th >Nama Petani</th>
				      <th >Alamat</th>
				      <th >Telepon</th>
				      <th >Aksi</th>
				    </tr>
				  </thead>
				  <tbody style="text-align: center;">
				  <?php $no=1; ?>
					@foreach($anggotas as $anggotas)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$anggotas->nama}}</td>
							<td>{{$anggotas->alamat}}</td>
							<td>{{$anggotas->tlp}}</td>
							<td>
							<form method="POST" action="/hapusAnggota/{{$anggotas->id_anggota}}" accept-charset="UTF-8">
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
 
			</div>
	  		<div class="five wide column" style="margin-top: 50px;">
	  			<div class="ui container" style="background-color: #1BBC9B;border-radius: 10px;">
	  					<div class="login-judul" style="padding-top: 15px; text-align: center;margin-right: 10px;margin-bottom: 0 px;">
							<span class="judulform" style="color: #F9BF3B;">
								Tambah Anggota
							</span>	
						</div>
	  			<div class="form-anggota" style="padding: 11px;">
	  			<form action="{{url('Anggota')}}" method="post">
					{{csrf_field()}}
						Nama Petani: <br>
				      	<div class="ui fluid left icon input">
						  <input placeholder="Masukkan nama" type="text" name="nama_petani">
						  <i class="users icon"></i>
						</div>
						Alamat :<br>
						<div class="ui fluid left icon input">
						  <input placeholder="Masukkan alamat" type="text" name="alamat">
						  <i class="home icon"></i>
						</div>
						Telepon :<br>
						<div class="ui fluid left icon input">
						  <input placeholder="Masukkan telepon" type="text" name="tlp" >
						  <i class="call icon"></i> 
						</div>
						Username :
						<div class="ui fluid left icon input">
						  <input placeholder="Masukkan username" type="text" name="Username">
						  <i class="users icon"></i>
						</div>
						Password :
						<div class="ui fluid left icon input">
						  <input placeholder="Masukkan password" type="text" name="Password">
						  <i class="lock icon"></i>
						</div>
						<div class="form-group" style="margin-top: 5px;">
							<input type="submit" value="Simpan" class="fluid ui button" style="height: 40px;background-color: #F9BF3B;">
						</div>
					</form>
				</div>
				</div>
	  		</div>
	  	</div>
	</div>	
</body>
			<footer style="bottom: 0px;position: fixed;">
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