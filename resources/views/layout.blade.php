<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ShopOnline</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css"> 
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container px-4 px-lg-5">
                        <a class="navbar-brand" href="/">ShopOnline</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/products">All Products</a></li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li><a class="dropdown-item" href="/products/edit">Edit Products</a></li>
                                        <li><a class="dropdown-item" href="/products/create">Create Products</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Users</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/users">All Users</a></li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li><a class="dropdown-item" href="/users/edit">Edit Users</a></li>
                                        <li><a class="dropdown-item" href="/users/create">Create Users</a></li>

                                    </ul>
                                </li>
                            </ul>
                            @auth
                            Welcome {{auth()->user()->name}} &nbsp; &nbsp; 
                            @endauth
                            <form class="d-flex">
                                <button class="btn btn-outline-dark" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                    Cart 
                                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                                </button>
                            </form> &nbsp; 
                            @auth
                            <form class="inline" method="POST" action="/logout">
                                @csrf
                                <button class="btn btn-outline-dark" type="submit">
                                    Logout
                                    <i class="bi bi-door-open-fill"></i>
                                </button>
                            </form>
                            @else
                            <form class="d-flex" style="padding-left: 10px">
                            <form action="/users/create">
                                <button class="btn btn-outline-dark" type="submit">
                                    {{-- <a href="/users/create"> --}}
                                    <i class="bi bi-person-circle"></i>
                                    Register
                                {{-- </a> --}}
                                </button>
                            </form>

                            @endauth
                            </form>
                        </div>
                    </div>
                </nav>
                <main>
                    @yield('content')
                </main>
            </div>
            <!-- Footer-->
            <footer class="py-5 bg-dark" id="footer">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; ShopOnline 2023</p></div>
            </footer>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
