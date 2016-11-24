<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
<img id="background" src="{{ URL::asset('/image/background.jpg') }}">
	<div id="atas-home">
		<div class="ui grid">
	  		<div class="three wide column">
	  			<div class="ilogo1"><img class="ilogo2" src="{{ URL::asset('/image/logosemaputpadi.png') }}">
				<div class="tlogo2"> <span class="ku rb">SEMAPUT-PADI</span></div></div>
	  		</div>
	  		<div class="one wide column">
	  		</div>
	  		<div class="seven wide column" style=" margin-top: 5vh; margin-left: 125px;">
				<p><div class="trekap" style="font-family: 'Oswald', sans-serif;"><div class="t3"><span class="ku2">LAPORAN</span> <span class="ku"> KEBUTUHAN PUPUK</span></div></div></p>
	  		</div>
	  		<div class="three wide column">
	  		<div class="profil"> <img class="img-profil1" src="{{ URL::asset('/image/girl.png') }}" > 
  				<div class="ui buttons">
					  <button class="ui inverted olive button">Profil</button>
					  <div class="or"></div>
					  <button class="ui inverted green button">Logout</button>
				</div></div>
	  		</div>
	  	</div>
	</div>


	<div style="margin-top: 30px;">
		<div class="ui grid">
	  		<div class="two wide column"></div>
	  		<div class="eleven wide column">
	  				<a href="{{ route('laporan.create') }}">
					<button class="ui labeled icon green button">
  					<i class="users icon"></i>
  					Daftar Anggota
					</button></a>
			</div>
		</div>
	</div>

	<div class="menu-rekap" style="margin-top: 5px;">
		<div class="ui grid">
	  		<div class="two wide column"></div>
	  		<div class="twelve wide column">		
			<table class="ui  striped  table">
			  <thead style="text-align: center;">
			    <tr >
			      <th rowspan="2" >No</th>
			      <th rowspan="2" >Tanggal</th>
			      <th colspan="5" >Kebutuhan Pupuk</th>
			      <th rowspan="2" >Luas Lahan</th>
			    </tr>
			    <tr>
			    	<th>Urea</th>
			    	<th>SP-36</th>
			    	<th>KCL(-pupuk)</th>
			    	<th>KCL(+pupuk)</th>
			    	<th>ZA</th>
			    </tr>
			  </thead>
			  <tbody style="text-align: center;">
			  <?php $no=1; ?>
			  @foreach($laporans as $laporans)
			    <tr>
			    	<th>{{$no++}}</th>
				    <td>{{$laporans->petani->nama_petani}}</td>
				    <td>{{$laporans->urea}}</td>
				    <td>{{$laporans->sp36}}</td>
				    <td>{{$laporans->KCLJ}}</td>
				    <td>{{$laporans->KCLN}}</td>
				    <td>{{$laporans->ZA}}</td>
			    </tr>
			    @endforeach
			 </tbody>
			</table>
			</div>
	  		<div class="one wide column"></div>
	  	</div>
	</div>	

		<div style="margin-top: 10px; text-align: center;">
		<div class="ui grid">
	  		<div class="sixteen wide column">
	  		<button class="ui labeled icon blue button">
			  	<i class="left arrow icon"></i>
			  	Sebelum
				</button>
	  			<button class="ui right labeled blue icon button">
			  	<i class="right arrow icon"></i>
			  	Selanjutnya
				</button>
	  		</div>
	  		</div>

</body>

</html>