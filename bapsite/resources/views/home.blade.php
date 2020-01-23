@extends('layouts.app')
@section('header')
<h1>Sam's avondtuurlijke kerstvakantie</h1>
@endsection

@section('content')

<div class="chavez">


        <div class="poetin">
            <h2>Hallo mensen welkom op mijn blog</h2>
            

            <a href="{{ route('blog.add') }}">Klik hier om naar de blog te gaan</a><br><br>
            <a href="{{ route('upload') }}">Klik hier om een file te uploaden</a>
        </div>

  
</div>

@endsection




