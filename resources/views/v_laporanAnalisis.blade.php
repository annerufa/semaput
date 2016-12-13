<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/dataTables.semanticui.min.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.semanticui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#anggota').DataTable();
} );
    </script>
</head>
<body>
<img id="background" src="{{ URL::asset('/image/background.jpg') }}">
	<div id="atas-home">
		<div class="ui grid">
	  		<div class="three wide column">
	  			<div class="ilogo1"><a href="{{URL('Ketua')}}"><img class="ilogo2" src="{{ URL::asset('/image/logosemaputpadi.png') }}"></a>
				<div class="tlogo2"> <span class="ku rb">SEMAPUT-PADI</span></div></div>
	  		</div>
	  		<div class="one wide column">
	  		</div>
	  		<div class="eight wide column" style=" margin-top: 5vh; margin-left: 100px;">
				<p><div class="trekap" style="font-family: 'Oswald', sans-serif;"><div class="t3"><span class="ku2">LAPORAN</span> <span class="ku"> KEBUTUHAN PUPUK</span></div></div></p>
	  		</div>
	  		<div class="two wide column">
	  		<a href="/logout">
  				<div style="margin-top: 5vh;margin-left: 20px;">
					  <button class="ui inverted yellow button">Logout</button>
				</div>
			</a>
	  	</div>
	</div>


	<div style="margin-top: 30px;">
		<div class="ui grid">
	  		<div class="two wide column"></div>
	  		<div class="eleven wide column">
	  				<a href="{{URL('dataAnggota')}}">
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
			<table class="ui  striped  table" id="anggota" >
			  <thead style="text-align: center;">
			    <tr >
			      <th rowspan="2" >No</th>
			      <th rowspan="2" >Nama</th>
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
				    <td>{{$laporans->petani->nama}}</td>
				    <td>{{$laporans->urea}}</td>
				    <td>{{$laporans->sp36}}</td>
				    <td>{{$laporans->KCLJ}}</td>
				    <td>{{$laporans->KCLN}}</td>
				    <td>{{$laporans->ZA}}</td>
				    <td>{{$laporans->luasLahan}}</td>
			    </tr>
			    @endforeach
			 </tbody>
			</table>
			</div>
	  		<div class="one wide column"></div>
	  	</div>
	</div>	


</body>

</html>