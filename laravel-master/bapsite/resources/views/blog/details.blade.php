@extends('layouts.master')

@section('header')
@foreach($blogo as $blogski)
<h2>{{ $blogski->titel }}</h2>
@endsection

@section('content')
 
<div class="chavez">
    

        <div class="poetin">
            <h2>{{ $blogski->datum }}</h2>
            <p>{{ $blogski->tijd }}</p>
            <p>{{ $blogski->locatie }}</p>
            <a href="{{ route('blog.add') }}">terug</a>
        </div>
    @endforeach
    {{ $blogo->links() }}
  
</div>

@endsection