@extends('layouts.app')

@section('tab-title') edit @endsection

@section('content')
    <h1 class="text-center mb-5">Edit your note</h1>
    <div class="row">
        <div class="col-lg-6">
            @include('includes.info')
            <form action="{{ route('edit-submit', $data->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Enter name</label>
                    <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="name" id="name">
                </div>

                <div class="form-group">
                    <label for="title">Enter title</label>
                    <input type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="title" id="title">
                </div>

                <div class="form-group">
                    <label for="note">Make your note</label>
                    <textarea class="form-control" name="note" id="note" placeholder="write here" rows="5">{{ $data->note }}</textarea>
                </div>
                <button class="btn btn-success mt-3" type="submit">Update</button>
            </form>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <div class="home__image">
                <img src="https://lh3.googleusercontent.com/3f9vWHa7Dozj4JUO3pz1jfZkDBxTSNlzNOKTGCdklQJKuwpud1_l-khaBZdqvmD8WX0=w300" alt="">
            </div>
        </div>
    </div>
@endsection