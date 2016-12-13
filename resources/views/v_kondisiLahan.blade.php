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
										<input placeholder="Masukkan Luas Lahan" type="number" name="luasLahan" required="" >
										<div class="ui basic label">
											Ha
										</div>
									</div> <span class="ku">1 hektar = 1000 m<sup>2</sup></span>
									<br>
									<div class="ui right labeled input" style="margin-bottom: 25px;">
										<input placeholder="Masukkan Umur Padi" type="number" name="umurPadi" required="">
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

			</body>
			</html>