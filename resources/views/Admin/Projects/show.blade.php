@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-between">
                    <h3>Dettaglio project: {{$projects->title}}</h3>
                <div>
                <a href="{{route('admin.projects.index')}}" class="btn btn-primary btn-sm">Go back</a>
            </div>
        </div>
        <div class="col-12">
            <p><strong> Slug: </strong> {{$projects->slug}}</p>
            <label class="d-block"><strong>Descrizione: </strong></label>
            <p>{{$projects->description}}</p>
        </div>
    </div>
@endsection