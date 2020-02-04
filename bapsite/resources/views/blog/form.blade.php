@extends('layouts.master')

@section('header')
    <h3>Add post</h3>
@endsection

@section('content')
@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>

@endif
    <form action="{{ route('blog.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="">Titel</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}" />
        </div>
        <div class="form-group">
            <label for="">Omschrijving</label>
            <textarea class="form-control" name="desc" value="{{ old('desc') }}"></textarea>
        </div>
        <div class="form-group">
            <label for="">Tijd</label>
            <input type="text" class="form-control" name="tijd" value="{{ old('tijd') }}" />
        </div>
        <div class="form-group">
            <label for="">Datum</label>
            <input type="date" class="form-control" name="pub_date" value="{{ old('pub_date') }}" />
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>

@endsection
