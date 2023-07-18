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

        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
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
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3">Types</h2>
                        <div class="types">
                            <span class="badge badge-pill badge-secondary bg-normal me-2">Normal</span>
                            <span class="badge badge-pill badge-success bg-grass me-2">Grass</span>
                            <span class="badge badge-pill badge-secondary bg-fire me-2">Fire</span>
                            <span class="badge badge-pill badge-success bg-water me-2">Water</span>
                            <span class="badge badge-pill badge-secondary bg-bug me-2">Bug</span>
                            <span class="badge badge-pill badge-success bg-electric me-2">Electric</span>
                            <span class="badge badge-pill badge-secondary bg-rock me-2">Rock</span>
                            <span class="badge badge-pill badge-success bg-ghost me-2">Ghost</span>
                            <span class="badge badge-pill badge-secondary bg-poison me-2">Poison</span>
                            <span class="badge badge-pill badge-success bg-psychic me-2">Psyshic</span>
                            <span class="badge badge-pill badge-secondary bg-fighting me-2">Fighting</span>
                            <span class="badge badge-pill badge-success bg-ground me-2">Ground</span>
                            <span class="badge badge-pill badge-success bg-dragon me-2">Dragon</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-3 p-3">
                        <div >
                            <img class="my-card-img mb-3" src="https://cdn.dribbble.com/users/112047/screenshots/17064756/media/18c3f5697d0a0df8a0bd3c677169ea3f.jpg?resize=1600x1200&vertical=center" alt="">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img class="pokeball-icon me-1 mb-0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Pok%C3%A9_Ball_icon.svg/1200px-Pok%C3%A9_Ball_icon.svg.png" alt="">
                                    <h5 class="mb-0">Name Surname</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-heart me-1"></i>
                                    <span class="me-1">230</span>
                                    <i class="fa-solid fa-eye me-1"></i>
                                    <span>10.2k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
    </body>
    
</html>
