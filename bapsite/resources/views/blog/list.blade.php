@extends('layouts.master')

@section('header')
<h1>Sam's avondtuurlijke kerstvakantie</h1>
@endsection

@section('content')
   <div class="chavez">
       
       <a href="{{ route('home') }}">Ga terug</a>
    @foreach($blog as $blogski)

        <div class="poetin">
            <h2>{{ $blogski->titel }}</h2>
            <img>{{ $blogski->image }}</im>
            <p>{{ $blogski->text }}</p>
            <a href="{{ route('blog.details') }}">Details</a>
        </div>
    @endforeach
    {{ $blog->links() }}
  
</div>

@endsection