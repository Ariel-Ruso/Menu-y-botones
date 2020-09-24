<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
		@yield('title', 'default')
	</title>

    <script src="{{ asset('/js/app.js') }}" defer></script>  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="http://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    

    <!-- Styles 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Panel</a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('bienvenidos')}}">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
           
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('crear_usuario') }}">Crear usuario</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('mostrarTodos')}}">Mostrar Usuarios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('nosotros')}}">Nosotros</a>
                </li>
                
            </ul>
            <!-- Links -->

            <nav class="navbar navbar-light float-right">
                <form class="form-inline">
                    <input  name="buscarpor" 
                            class="form-control mr-sm-2" 
                            type="search" 
                            placeholder="Buscar User por nombre" 
                            aria-label="Search"
                        >
                    <button  class="btn btn-outline-success my-2 my-sm-0" 
                                type="submit">
                                Buscar
                    </button>
                </form>
            </nav>
        </div>
        <!-- Collapsible content -->

    </nav>       
   
</head>
<br>
<body>

    @yield('contents')             
        
</body>
</html>