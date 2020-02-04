@extends('layouts.master')

@section('header')
<h1>jouw geposte artikelen</h1>
@endsection

@section('content')
   <div class="chavez">
       
       <a href="{{ route('home') }}">Ga terug</a>
    @foreach($blog as $blogsko)

        <div class="poetin">
            <h2>{{ $blogsko->title }}</h2>
            <img src="{{ asset('storage/' . $product->image) }}" />
            <p>{{ $blogsko->desc }}</p>
            <p>{{ $blogsko->tijd }}</p>
            <p>{{ $blogsko->pub_date }}</p>
            <a href="{{ route('blog.details') }}">Details</a>
        </div>
    @endforeach
    {{ $blog->links() }}
  
</div>

@endsection