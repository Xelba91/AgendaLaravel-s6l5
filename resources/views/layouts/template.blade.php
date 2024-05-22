<!DOCTYPE html>
<html lang="it" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con Navbar e Footer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
        .login { 
            margin-inline: auto;
            width: 200px;
            display: flex;
            justify-content: center;
            align-content: center;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: center;
            margin-bottom: 57px;
        }
        body{
           
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
    flex-grow: 1; 
  }

        footer {
               left:0;
               width:100%;
}



        
  
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Home</a>
                    </li>
                   
                    <x-responsive-nav-link class="d-flex text-white text-decoration-none text-align-center" :href="route('profile.edit')">
                        {{ __('Profilo') }}
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link class="d-flex text-white text-decoration-none text-align-center" :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="bg-white container mt-5" style="text-align: center">
        <h1>@yield('title')</h1>
        <p>@yield('paragrafo')</p>
    </main>

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->

    <footer class="bg-dark text-white text-center py-3 footer ">
        <div class="container">
            <p>&copy; 2024 La Mia Agenda.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>