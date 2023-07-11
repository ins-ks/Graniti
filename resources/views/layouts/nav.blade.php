<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex justify-content-left"style="margin-left: 300px;">
        <a class="navbar-brand d-flex align-items-center" href="">
        <img src="{{ asset('images/d.jpg') }}" alt="Logo" width="100" height="100" class="d-inline-block align-top mr-2">
            
        </a>
        
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
       
            <!-- These links will be shown only to guests (not logged in) -->
            @guest
          <li><a class="navbar-brand d-flex align-items-center" href="">
            Blog
        </a></li>  
       <li><a class="navbar-brand d-flex align-items-center" href="">
            About
        </a></li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Authentication
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>