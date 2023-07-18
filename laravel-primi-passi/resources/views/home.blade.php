<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>

        {{-- Bootstrap  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
                <a class="navbar-brand" href="#">
                    <img src=" https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/d98dde45d242734.png" height="60" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                  
                </div>
              </nav>
        </header>
        <h1>
            Hello World!
        </h1>

        <h2>
            {{$username}}
        </h2>
        <img class="user-img" src="{{$img}}"/>
    </body>
    
</html>
