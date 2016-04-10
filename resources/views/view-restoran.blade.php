@extends('master')

@section('contents')

  @if(count($restoran))
 	<div class="container" >
 		<div class="row">
 			<div class="col-xs-6 col-sm-6 col-md-6">
 				<h1 id="name"><b>{{$restoran->nama}}</b></h1>
 			</div>
 			<div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-4 col-md-2 col-md-offset-4">
 				<a class="btn btn-default" href="#" role="button">Singgah</a>
 			</div>
 		</div>
 		<br>
  		<div class="row">
        	<div class="col-xs-6 col-sm-6 col-md-6">
  				
  			</div>
  			<div class="col-xs-6 col-sm-6 col-md-6">
  				<div class="panel panel-default">
  					<div class="panel-body">
		  				<h4 id="deskripsi"> {{$restoran->deskripsi}} </h4>
						<h4 id="lokasi"> Lokasi : {{$restoran->lokasi}}</h4>
						<h4 id="no-telp">  </h4>
						<h4 id="tax"> Tax : {{$restoran->tax}}%</h4>
						<h4 id="rate"> Rate : {{$restoran->rate}} </h4>

						<h4> Jenis Masakan : </h4>
						<ul>
						@foreach($jenis_masakans as $jenis_masakan)
							<li>{{$jenis_masakan->jenis_masakan}} </li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<h4> Waktu Operasional : </h4>
				<ul>
				@foreach($waktu_operasionals as $waktu_operasional)
					<li> {{$waktu_operasional->hari}} :  {{$waktu_operasional->waktu_buka}} - {{$waktu_operasional->waktu_tutup}} </li>

				@endforeach
				</ul>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6">
				<h4> Fasilitas : </h4>
				<ul>
				@foreach($fasilitas_restorans as $fasilitas_restoran)
					<li> {{$fasilitas_restoran->nama_fasilitas}} </li>

				@endforeach
				</ul>
			</div>
		</div>

		<h4> Daftar Menu </h4>
		<table border="2" class="tbl-menu">
		<th class="tbl-menu-th"> nama </th>
		<th class="tbl-menu-th"> harga </th>
		<th class="tbl-menu-th"> </th>
		@foreach($menus as $menu)
			<tr class="tbl-menu">
			<td class="tbl-menu"> {{$menu->nama}} </td>
			<td class="tbl-menu"> {{$menu->harga}} </td>
			<td class="tbl-menu"> <a href="../menu/{{$menu->id}}">lihat </a></td>

			</tr>
		@endforeach
		</table>
	</div>
@endif


@stop




