@extends('layouts/static_page')
@section('content')
  @foreach($cds as $cd)
  <div class="cd">
      <img src="{{$cd['poster']}}" />
      <h3>{{$cd['title']}}</h3>
      <small>{{$cd['artist']}}</small>
      <strong>{{$cd['year']}}</strong>
  </div>
  @endforeach
@endsection
