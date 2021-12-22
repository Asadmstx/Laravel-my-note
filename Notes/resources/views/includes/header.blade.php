<header class="py-3 border-bottom header">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4 fw-bold">My Notes</span>
        </a>
    
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link fw-bold header__link">Home</a></li>
            <li class="nav-item"><a href="{{ route('list') }}" class="nav-link fw-bold header__link">List</a></li>
            <li class="nav-item"><a href="{{ route('add') }}" class="nav-link fw-bold header__link">Add notes</a></li>
        </ul>
    </div>
</header>
