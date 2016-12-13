<!DOCTYPE html>
<html>
<head>
	<title>
		Selamat Datang di SEMAPUT - PADI
	</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>


<body>
	<img id="background" src="{{ URL::asset('image/background.jpg') }}">

	<div id="atas-home" >
		<div class="ui grid">
			<div class="five wide column">
				<img class="ilogo" src="{{ URL::asset('image/logosemaputpadi.png') }}">
			</div>
			<div class="seven wide column">
				<p><div class="judul"><span class="ku">SEMAPUT - PADI</span> </div></p>
				<p><div class="subjudul"><span class="ku2"> Sistem Manajemen Pupuk Tanaman - Padi</span></div></p>
			</div>
			<div class="two wide column">
				<div class="ui buttons">
                      <button id="myBtn" class="ui inverted olive button">Profil</button>
                      <div class="or"></div>
                      <a href="/logout">
                      <button class="ui inverted green button">Logout</button>
                      </a>
                </div>

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
						<a href="{{URL ('Analisis') }}"> <img class="menu1" src="{{ URL::asset('image/iconanalisisdata.png') }}"></a>
					</div>
					<div class="eight wide column"><a href="{{ URL::asset('file.pdf') }}"> <img class="menu2" src="{{ URL::asset('image/iconpanduan.png') }}"></a></div>
				</div>
			</div>
			<div class="tmenu">
				<div class="ui grid">
					<div class="six wide column"></div>
					<div class="one wide column"">
						<div class="tmenu1"><span class="pu">Analisis</span></div>
						<div class="tmenu1 ku2">Data</div>
					</div>
					<div class="one wide column"></div>
					<div class="three wide column">
						<div class="tmenu2"><span class="pu">Panduan</span><br><span class="ku2">BWD & PUTS</span></div>
					</div>
					<div class="five wide column">
					</div>
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

		<script >
			$('.ui.modal')
			.modal()
			;
		</script>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="position: relative;" >
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Ubah Profil</h2>
    </div><br>
    <div class="modal-body">
    	<form  action="/profil" method="post">
		{{csrf_field()}}
    	Nama : <br>
      	<div class="ui fluid left icon input">
		  <input placeholder="Masukkan nama" type="text" name="nama" value="{{$anggota->nama}}">
		  <i class="users icon"></i>
		</div><br>
		Alamat :<br>
		<div class="ui fluid left icon input">
		  <input placeholder="Masukkan alamat" type="text" name="alamat" value="{{$anggota->alamat}}">
		  <i class="home icon"></i>
		</div><br>
		Telepon :<br>
		<div class="ui fluid left icon input">
		  <input placeholder="Masukkan telepon" type="text" name="tlp" value="{{$anggota->tlp}}">
		  <i class="call icon"></i> 
		</div><br>
		Password<br>
		<div class="ui fluid left icon input">
		  <input placeholder="Masukkan password" type="text" name="password" value="{{$anggota->password}}">
		  <i class="users icon"></i>
		</div><br>
		<button class="ui fluid teal button" value="submit" >Simpan</button><br>
		</form>
    </div>
    <div class="modal-footer">
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2BewvnPtn1NFKuIXf%2fkSL4dSEiD7dmKe5wRYkx9D3ZRDwSyD4YApEtLtWArj%2f4CNygWSJlhUhXLYKqs2hn2r%2f%2f91Hxc7iVw4bbH%2baNqC1L9j8igLR1zLvurZ5ZLvVEy5%2b2AYNi6I7NjBunECMIBvG%2bThC7jp6ioXWOL2jaMEyXRhSBsEanq5E6zOZfmESxh4ZuSMC7HtSbfvdoA4ImBz1%2bnS6NGhJgaCHNic0HVG0FmXp3oS2StcARqQLpVNu1ffkx9zF26Bz7BdhY3QjCKpZNpGUvvwkn5fypXNJBCcoHtKgQtMoMoGE8LxgSrOPar0kuQj%2fLIQKf4VcSKhhtRMicI3fwmfwsWLoxrsd7QFvjuz8z9QwurGJC2u03BJPdThev" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

	</body>
	</html>