@extends('layouts.app')

@section('content')
<h1>Album Details</h1>

    <form method="post">
        {{ csrf_field() }}
        <fieldset class="form-group">
            <label for="title" class="col-sm-2">Title: *</label>
            <input name="title" id="title" required />
        </fieldset>
        <fieldset class="form-group">
            <label for="year" class="col-sm-2">Year: *</label>
            <input name="year" id="year" required type="number" min="1300" />
        </fieldset>
        <fieldset class="form-group">
            <label for="artist" class="col-sm-2">Artist: *</label>
            <input name="artist" id="artist" required />
        </fieldset>
        <button class="btn btn-primary col-sm-offset-2">Save</button>
    </form>

@endsection