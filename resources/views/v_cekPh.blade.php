
<html>
<head>
	<title>Unsur Ph | SEMAPUT</title>
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
					<div class="ilogo3"><img class="ilogo4" src="{{ URL::asset('image/iconunsurPh.png') }}"></div>
					<p><div class="tulisan3 " ><div class="t3" ><span class="pu"> UNSUR Ph</span> <span class="ku"> TANAH</span></div></div></p>
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
				<div class="four wide column"></div>
				<div class="eight wide column">
					<div style="font-family: Roboto;font-size: 30px;"><span class="pu"> Warna</span> <span class="ku"> Larutan</span> </div> <br>
					<div style="background-color:#CE0203 ;width:110px ;height:200px ;margin-left:0px; position: absolute;"></div>
					<div style="background-color:#F95B00 ;width:110px ;height:200px ;margin-left: 110px; position: absolute;"></div>
					<div style="background-color:#FCC761 ;width:110px ;height:200px ;margin-left: 220px; position: absolute;"></div>
					<div style="background-color:#CAC400 ;width:110px ;height:200px ;margin-left: 330px; position: absolute;"></div>
					<div style="background-color:#619202 ;width:110px ;height:200px ;margin-left: 440px; position: absolute;"></div>
					<div style="background-color:#005F91 ;width:110px ;height:200px ;margin-left: 550px; position: absolute;"></div>
				</div>
				<div class="three wide column"></div>
			</div>	
		</div>

		<form action="{{url('ph') }}" method="post">
			{{csrf_field()}}
			<div style="position: relative;">
				<div class="ui grid">
					<div class="four wide column"></div>
					<div class="eight wide column">
						<div class="field" style="margin-left:30px; position: absolute;">
							<div class="ui toggle checkbox">
								<input name="ph" type="radio" value="sangat masam" required="">
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 140px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="ph" type="radio" value="asam" required="">
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 250px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="ph" type="radio" value="agak asam" required="">
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 360px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="ph" type="radio" value="netral" required="">
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 470px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="ph" type="radio" value="agak basa" required="">
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 580px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="ph" type="radio" value="basa" required="">
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