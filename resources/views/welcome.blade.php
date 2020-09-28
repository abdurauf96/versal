@extends('layouts.index')

@section('content')

@if(session('msg'))
  <div class="flash alert alert-success col-xs-12 col-md-4">
    <p>{{ session('msg') }}</p>
  </div>
@endif
 @if(count($errors))
    <div class=" error col-md-4 alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
   @endif
@include('partials.top')
@include('partials.oboi')
@include('partials.offer')
@include('partials.about')
@include('partials.product')
@include('partials.partner')
@include('partials.zayafka')

@endsection