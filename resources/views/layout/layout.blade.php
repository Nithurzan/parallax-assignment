<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABC Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg  mb-5 mt-2">
                <div class="container">
                    <span class="navbar-brand">ABC company</span>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('product.index') }}">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('category.index') }}">Category</a>
                            </li>
                        </ul>
                        <form action="{{ route('logout') }}" method="POST" class="d-flex">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </nav>

            @yield('content')

        </div>
    </div>
</body>

</html>
