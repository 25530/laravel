@extends('layouts.master')

@section('header')

@endsection

@section('content')
<div class="form">
    <h3 align="center">File uploading</h3>
    <br />
    @if(count($errors) > 0)

    @endif
    <form method="post" action="{{ url('/upload')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <table class="table">
            <tr>
                <td width="40%"><label>
                    Select file</label></td>
                    <td width="30%"><input type="file" name="select_file" /></td>
                    <td width="30%">
                        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                    </td>
            </tr>
            <tr>
                <td width="40%"></td>
                <td width="30%"><span class="text-muted">
                    jpeg, jpg, png, gif</span></td>
                <td width="30%"></td>
            </tr>
        </table>
        </div>
</form>

<br />
@endsection