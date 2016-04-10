@extends('master')

@section('contents')

@if(count($menu))
  <div class="container" >
  <br>
  <img src="../images/foto01.jpg" alt="Chania" width="200" height="300">
  <h3> {{$menu->nama }}</h3>
  <h5> {{$menu->deskripsi}} </h5>
  <h4> Rp.{{$menu->harga }},00</h4>
  <h5> jenis masakan : {{$menu->kategori}} </h5>
  <h5> kategori : {{$menu->jenis}} </h5>
  <h5> rating : {{$menu->rate}} </h5>
  <h5> {{$menu->jumlah_tested}} tasted </h5>

  </div>
@endif


@stop

