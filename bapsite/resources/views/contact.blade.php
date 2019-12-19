@extends('layouts.master')

@section('header')
Contact page
@endsection

@section('content')

@if($erros->any())
@endif
<form action="{{ route('product.store') }}" method="POST">
@csrf
  First name:<br>
  <input type="text" name="name" value="{{ old('name')}}" @error ('name') is-invallid @enderror />
  @error('name')
  @enderror
  <br>
  Last name:<br>
  <input type="text" name="desc" value="Mouse">

  <br><br>
  <input type="submit" value="Submit">
</form> 
@endsection
<p>
text
</p>