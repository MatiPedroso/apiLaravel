
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Api Laravel</title>
  </head>
  <body>
    @include('nav')

    <div class="container text-center mt-5" >
        <div class="row align-items-start">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://imgs.search.brave.com/jwCAMk0FaQIrPg47cOy3P4fr8fVifj65MuRoW337KH4/rs:fit:1200:1080:1/g:ce/aHR0cHM6Ly9rYXBp/cm90YWRhLmZpbGVz/LndvcmRwcmVzcy5j/b20vMjAxNy8wNC8w/MDAxNi1tMnRzX3Nu/YXBzaG90XzE1LTA4/XzIwMTQtMTAtMTBf/MjAtNDMtMDFfb3Jp/Z2luYWwuanBn" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Personajes</h5>
                        <p class="card-text">Visualiza a los personajes y sus características de la serie.</p>
                        <a href="{{route('characters.all')}}">Ver Personajes</a>
                    </div>
            </div>
            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                <img src="https://imgs.search.brave.com/85YrxVq_-tnxb0rwCOhYpJ5wuPHKGA6kKGQgexdYiws/rs:fit:1024:576:1/g:ce/aHR0cHM6Ly9wbTEu/bmFydmlpLmNvbS82/NDM0LzM4Y2JhMTdj/YmJlYzZmMTc3ZjIw/MDlmN2Q3ZDM5ZjRi/MGZmYmExZjRfaHEu/anBn" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Episodios</h5>
                    <p class="card-text">Mira algunos datos interesantes de cada episodio.</p>
                    <a href="{{route('episodes.all')}}">Ver Episodio</a>
                </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>