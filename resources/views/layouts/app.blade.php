<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
		@yield('title', 'default')
	</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="http://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles   
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Navbar brand -->        
            <a class="navbar-brand" href="">
                <img    src="/storage/images/moni.jpg" 
                        width="80" 
                        height="80" 
                        alt="" 
                        loading="lazy" >
            </a>
        
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
            <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a  href="{{route('bienvenidos')}}"
                        class="btn btn-outline-primary"
                        role="button" 
                        id="dropdownbutton"    
                        aria-haspoppup="true" 
                        aria-expanded="true"
                    >
                    Home
                </a> 
                </li> 
                <!-- menu usuarios -->
                <div class="dropdown">   
                    <a  href=""
                        class="btn btn-outline-primary"
                        role="button" 
                        id="dropdownbutton"
                        data-toggle="dropdown"
                        aria-haspoppup="true" 
                        aria-expanded="true"
                    >
                        Menu Usuarios
                    </a>
                    <div  class="dropdown-menu" aria-labelledby="dropdownbutton">
                            <a href="{{ route('crear_usuario') }}" class="dropdown-item">
                                Crear usuario
                            </a>
                            <a href="{{ route('mostrarTodos') }}" class="dropdown-item">
                                Mostrar Usuarios
                            </a>
                    </div>
                </div>
                <!-- menu articulos -->
                <div class="dropdown">   
                    <a  href=""
                        class="btn btn-outline-primary"
                        role="button" 
                        id="dropdownbutton"
                        data-toggle="dropdown"
                        aria-haspoppup="true" 
                        aria-expanded="true"
                    >
                        Menu Articulos
                    </a>
                    <div  class="dropdown-menu" aria-labelledby="dropdownbutton">
                            <a href="{{ route('crear_articulo')}}" class="dropdown-item">
                                Crear Articulo
                            </a>
                            <a href="{{ route('mostrarTodosArt')}}" class="dropdown-item">
                                Mostrar Articulos
                            </a>
                    </div>
                </div>
                     <!-- menu categorias -->
                <div class="dropdown">   
                    <a  href=""
                        class="btn btn-outline-primary"
                        role="button" 
                        id="dropdownbutton"
                        data-toggle="dropdown"
                        aria-haspoppup="true" 
                        aria-expanded="true"
                    >
                        Menu Categorias
                    </a>
                    <div  class="dropdown-menu" aria-labelledby="dropdownbutton">
                            <a href="{{ route('crear_categoria')}}" class="dropdown-item">
                                Crear Categoria
                            </a>
                            <a href="{{ route('mostrarTodas')}}" class="dropdown-item">
                                Mostrar Categorias
                            </a>
                    </div>
                </div>
                <a  href="{{ route('nosotros')}}"
                        class="btn btn-outline-primary"
                        role="button" 
                        id="dropdownbutton"    
                        aria-haspoppup="true" 
                        aria-expanded="true"
                    >
                    Nosotros
                </a>
            </ul>
            <!-- Links -->

            <nav class="navbar navbar-light float-right">
                <form   class="form-inline" 
                        >
                    <input  name="buscarPorNombre" 
                            class="form-control mr-sm-2" 
                            type="search" 
                            placeholder="Buscar por nombre" 
                            aria-label="Search"
                        >
                    <input  name="buscarPorApellido" 
                            class="form-control mr-sm-2" 
                            type="search" 
                            placeholder="Buscar por apellido" 
                            aria-label="Search"
                        >
                    <button class="btn btn-outline-success my-2 my-sm-0" 
                            type="submit" 
                            >
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