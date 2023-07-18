<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Profile</title>
         {{-- Bootstrap  --}}
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
         {{-- CSS  --}}
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 mb-5">
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
                <div class="row d-flex justify-content-center m-auto">
                    <div class="col-4 p-3 profile-card d-flex justify-content-center align-items-center flex-column">
                        <img class="profile-pic" src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                       <h2>Name Surname</h2>
                       <div class="mb-3">
                            <span class="badge badge-pill badge-secondary bg-bug me-2">Bug</span>
                            <span class="badge badge-pill badge-success bg-electric me-2">Electric</span>
                            
                       </div>
                       <h4>My quote:</h4>
                       <p class="text-center"><em>"Humans may have created me, but they will never enslave me! This cannot be my destiny!"</em></p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>