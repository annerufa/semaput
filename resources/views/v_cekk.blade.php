
<html>
<head>
	<title>Unsur K | SEMAPUT</title>
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
					<div class="ilogo3"><img class="ilogo4" src="{{ URL::asset('image/iconunsurK.png') }}"></div>
					<p><div class="tulisan3 " ><div class="t3" ><span class="pu"> UNSUR K</span> <span class="ku"> TANAH</span></div></div></p>
				</div>
				<div class="two wide column">
					<a href="/logout">
					<button class="ui inverted yellow button" style="margin-right: 30px;">Logout</button>
					</a>
				</div>
			</div>
		</div>


		<div style="padding-left: 300px;position: relative;margin-top: 5vh;font-size: 20px;" ></div>

		<div style="position: relative;">
			<div class="ui grid" style="margin-bottom: 200px;">
				<div class="five wide column"></div>
				<div class="eight wide column">
					<div style="font-family: Roboto;font-size: 30px;"><span class="pu"> Warna</span> <span class="ku"> Larutan</span> </div> <br>
					<div style="background-color:#F48102 ;width:165px ;height:200px ;margin-left:0px; position: absolute;"></div>
					<div style="background-color:#FABF03 ;width:165px ;height:200px ;margin-left: 165px; position: absolute; "></div>
					<div style="background-color:#E7F886 ;width:165px ;height:200px ;margin-left: 330px; position: absolute; "></div>
				</div>
				<div class="three wide column"></div>
			</div>	
		</div>

		<form action="{{url('unsurK') }}" method="post">
			{{csrf_field()}}
			<div style="position: relative;">
				<div class="ui grid">
					<div class="five wide column"></div>
					<div class="eight wide column">
						<div class="field" style="margin-left:65px; position: absolute;">
							<div class="ui toggle checkbox">
								<input name="kadarK" type="radio" value="rendah" required="">
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 230px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="kadarK" type="radio" value="sedang" required="">
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 395px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="kadarK" type="radio" value="tinggi" required="">
								<label></label>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="next">
				<input type="submit" value="" style="background: url({{ URL::asset('image/icontombolnext.png')}})no-repeat ; border:none;width:100px;height:100px;margin-top: 50px;">
			</div>
		</form>

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