<!DOCTYPE html>
<html>
<head>
	<title>
		Selamat Datang di SEMAPUT - PADI
	</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>


<body>
<img id="background" src="{{ URL::asset('image/background.jpg') }}">

<div id="atas-home">
	<div class="ui grid">
	  <div class="six wide column">
	  			<a href="{{URL('ketua')}}"> <img class="ilogo" src="{{ URL::asset('image/logosemaputpadi.png') }}"></a>
	  </div>
	  <div class="eight wide column">
	  			<p><div class="judul"><span class="ku">SEMAPUT - PADI</span> </div></p>
				<p><div class="subjudul"><span class="ku2"> Sistem Manajemen Pupuk Tanaman - Padi</span></div></p>
	  </div>
	  <div class="two wide column">
	  <a href="/logout">
	  <button class="ui inverted yellow button" style="margin-right: 30px;">Logout</button>
	  			</a>
	  </div>
	</div>

	<div class="subheader">
		<div class="ui center aligned ">
		<span class="pu">Selamat datang di </span><span class="ku">SEMAPUT -- PADI<br>
		WEB </span><span class="pu">yang bertujuan</span><span class="ku"> memudahkan petani padi </span><span class="pu">dalam manajemen<br></span><span class="ku">
		kebutuhan pupuk</span><span class="pu"> yang akan di gunakan dengan bantuan<br> </span><span class="ku">
		PUTS </span><span class="pu">(Perangkat Uji Tanah Sawah)<br>
		& </span><span class="ku">BWD</span><span class="pu"> (Bagan Warna Daun)<br></span></div>
	</div>
	
	<div class="menu">
		<div class="ui grid">
			<div class="eight wide column">
			<a href="{{URL('laporanAnalisis')}}"> <img class="menu1" src="{{ URL::asset('image/laporan.png') }}"></a>
			</div>
			<div class="eight wide column"><a href="{{URL('dataAnggota')}}"> <img class="menu2" src="{{ URL::asset('image/anggota.png') }}"></a></div>
		</div>
	</div>
	<div class="tmenu">
		<div class="ui grid">
			<div class="six wide column"></div>
				<div class="one wide column"">
				<div class="tmenu1"><span class="pu">Data</span></div>
				<div class="tmenu1 ku2">Laporan</div>
				</div>
			<div class="one wide column"></div>
			<div class="three wide column">
				<div class="tmenu2"><span class="pu">Data</span><br><span class="ku2">Anggota</span></div>
			</div>
			<div class="five wide column"></a></div>
		</div>
	</div>
</div>

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



</body>
</html>