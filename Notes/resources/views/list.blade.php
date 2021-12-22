@extends('layouts.app')

@section('tab-title') List page @endsection

@section('content')
    <h1 class="text-center mb-5">Notes List</h1>
    <div class="row">
        <div class="col-lg-6">
            @include('includes.info')<!-- succes alert -->
            

            @foreach($data as $el)
                <div class="alert alert-primary overflow-hidden">
                    <p><small>{{ $el->created_at }} - </small><strong>{{ $el->name }}</strong></p>
                    <h4>{{ $el->title }}</h4>
                    <p>{{ $el->note }}</p>
                    <a href="{{ route('note-edit', $el->id)}}"><button class="btn btn-primary">Edit</button></a>
                    <a href="{{ route('note-delete', $el->id) }}"><button class="list__btn-del btn btn-danger" id="listbtn">Delete</button></a>
                </div>
            @endforeach
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <div class="home__image">
                <img src="https://miro.medium.com/proxy/0*cqT9sagU-JI3-kzI." alt="">
            </div>
        </div>
    </div>
@endsection