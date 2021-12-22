<footer class="py-3 mt-4 border-top footer">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <p class="col-md-4 mb-0 text-muted">© 2021 Asadmstx</p>
    
        <a href="{{ route('home') }}" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4 fw-bold">My Notes</span>
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="{{ route('list') }}" class="nav-link px-2 text-muted">List</a></li>
          <li class="nav-item"><a href="{{ route('add') }}" class="nav-link px-2 text-muted">Add notes</a></li>
        </ul>
    </div>
</footer>