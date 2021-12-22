@extends('layouts.app')

@section('tab-title') Home page @endsection

@section('content')
    <h1 class="text-center mb-5" >HomePage</h1>
    <div class="row">
        <div class="col-lg-8">
            <p class="fs-3">This web application can be used to make simple notes</p>
            <p class="fs-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione pariatur 
                rem eius qui mollitia
                earum quibusdam atque voluptate reiciendis, repellendus cumque sapiente
                quam, quisquam nam voluptatem dolores voluptas dolore consequatur 
                officiis suscipit optio esse! Minus error nemo eum nulla quod.
                officiis suscipit optio esse! Minus error nemo eum nulla quod.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci 
                voluptatum dignissimos architecto asperiores nisi amet. Quaerat voluptatibus cu
                m odio molestias, at officia provident facere, esse eos quae impedit corrupti?
            </p>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="home__image">
                <img
                src="https://lh3.ggpht.com/hBfE496_cK_bKKIlTKuNVm7aMVs5rZYb34qGoUnL02ZZV4ZlRSQGHERnlZ6iRsWp0gFV=w300"
                alt="">
            </div>
        </div>
    </div>
@endsection
