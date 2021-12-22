@if($errors->any())<!-- validation -->
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif<!-- here -->

@if(session('success'))
    <div class="alert alert-primary">
        {{session('success')}}
    </div>
@endif