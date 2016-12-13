<!DOCTYPE html>
<html>
<head>
	<title>Unsur N | SEMAPUT</title>
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
					<p><div class="tulisan3 " ><div class="t3" ><span class="pu"> WARNA</span> <span class="ku"> DAUN</span></div></div></p>
				</div>
				<div class="two wide column">
					<a href="/logout">
						<button class="ui inverted yellow button" style="margin-right: 30px;">Logout</button>
						</a>
				</div>
				</div>
			</div>


			<div>

			</div>

			<form action="{{URL('warnaDaun')}}" method="post">
				{{csrf_field()}}
				<div style="margin-top: 30px ; text-align: center;position: relative;">
					<div class="ui grid">
						<div class="three wide column"></div>
						<div class="three wide column">
							<div style="height: 200px ; width: 150px; background-color: #85BD38;border:none;float: right;"></div>
							<div class="field" style="margin-top: 250px;padding-left: 75px;">
								<div class="ui toggle checkbox">
									<input name="warnaDaun"  type="radio" value="rendah" required="">
									<label></label>
								</div>
							</div></div>
							<div class="two wide column">
								<div style="height: 200px ; width: 150px; background-color: #6F9B0A;border:none;float: right;">

								</div>
								<div class="field" style="margin-top: 250px;">
									<div class="ui toggle checkbox">
										<input name="warnaDaun"  type="radio" value="rendah" required="">
										<label></label>
									</div>
								</div></div>
								<div class="two wide column">
									<div style="height: 200px ; width: 150px; background-color: #699445;border:none;float: right;">

									</div>
									<div class="field"  style="margin-top: 250px;">
										<div class="ui toggle checkbox">
											<input name="warnaDaun" type="radio" value="sedang" required="">
											<label></label>
										</div>
									</div></div>
									<div class="two wide column">
										<div style="height: 200px ; width: 150px; background-color: #558343;border:none;float: right;">

										</div> 
										<div class="field"  style="margin-top: 250px;">
											<div class="ui toggle checkbox">
												<input name="warnaDaun" type="radio" value="tinggi" required="">
												<label></label>
											</div>
										</div></div>
										<div class="two wide column"></div>
									</div>
								</div>



								<div class="next">
									<input type="submit" value="" style="background: url({{ URL::asset('image/icontombolnext.png')}})no-repeat ; border:none;width:100px;height:100px;">
								</div>

			</form>

		</body>
</html> 