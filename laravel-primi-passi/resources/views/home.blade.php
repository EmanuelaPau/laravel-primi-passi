<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>

        {{-- Bootstrap  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        {{-- CSS  --}}
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        {{-- {{ HTML::style('css/style.css', array('media' => 'print')) }} --}}
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 mb-3">
                <a class="navbar-brand" href="#">
                    <img src=" https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/d98dde45d242734.png" height="60" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('my-profile')}}">My profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                    </ul>
                  
                </div>
              </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Types</h2>
                        <div>
                            <span class="badge badge-pill badge-secondary">Normal</span>
                            <span class="badge badge-pill badge-success">Grass</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    
</html>
