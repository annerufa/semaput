<!DOCTYPE html>
<html>
<head>
	<title>Kondisi Tanah | SEMAPUT</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>

<body>

	
	<div class="transparan1"><img id="background" src="{{ URL::asset('image/background.jpg') }}"></div>
	<div id="atas-home">
		<div class="ui grid">
	  		<div class="three wide column">
	  			<div class="ilogo1"><img class="ilogo2" src="{{ URL::asset('image/logosemaputpadi.png') }}">
				<div class="tlogo2"> <span class="ku rb">SEMAPUT-PADI</span></div></div>
	  		</div>
	  		<div class="two wide column">
	  		</div>
	  		<div class="eight wide column" style=" margin-top: 5vh;">
	  			<div class="ilogo3"><img class="ilogo4" src="{{ URL::asset('image/iconkeadaanlahan.png') }}"></div>
				<p><div class="tulisan3"><div class="t3"><span class="pu">KEADAAN</span> <span class="ku"> LAHAN</span></div></div></p>
	  		</div>
	  		<div class="three wide column">
	  		<div class="profil"> <img class="img-profil1" src="{{ URL::asset('image/girl.png') }}" > 
  				<div class="ui buttons">
					  <button class="ui inverted olive button">Profil</button>
					  <div class="or"></div>
					  <button class="ui inverted green button">Logout</button>
				</div></div>
	  		</div>
	  	</div>
	</div>

	<div id="menu-kondisi">
		<div class="ui grid">
	  		<div class="four wide column">
	  		</div>
	  		<div class="four wide column">
	  		<p style="margin-bottom: 30px;"><span class=tx-input><span class="ku">LUAS</span><span class="pu"> LAHAN</span></span>
			<br></p><p style="margin-bottom: 30px;">
			<span class=tx-input><span class="ku">TARGET</span><span class="pu"> PANEN</span></span><br></p><p style="margin-bottom: 30px;">
			<span class=tx-input><span class="ku">UMUR</span><span class="pu"> PADI</span></span></p>
	  		</div>
	  		<div class="one wide column" >
				<p style="margin-bottom: 30px;"><span class=tx-input><span class="pu">:</span></span><br></p>
				<p style="margin-bottom: 30px;"><span class=tx-input><span class="pu">:</span><br></span></p>
				<p style="margin-bottom: 30px;"><span class=tx-input><span class="pu">:</span></span></p>
	  		</div>
	  		<div class="six wide column">
	  			<div class="fkondisi">
	  				<div class="ui right labeled input" style="margin-bottom: 25px;">
					  <input placeholder="Masukkan Luas Lahan" type="text">
					  <div class="ui basic label">
					    HA
					  </div>
					</div><br>
					<div class="ui right labeled input" style="margin-bottom: 25px;">
					  <input placeholder="Masukkan Target Panen" type="text">
					  <div class="ui basic label">
					    T/HA
					  </div>
					</div><br>
					<div class="ui right labeled input" style="margin-bottom: 25px;">
					  <input placeholder="Masukkan Umur Padi" type="text">
					  <div class="ui basic label">
					    HST
					  </div>
					</div>
	  			</div>
	  			
	  		</div>
	  	</div>
	</div>

	<div class="next">
		<a href="{{URL('cekn')}}">
			<img src="{{ URL::asset('image/icontombolnext.png') }}">
		</a>
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