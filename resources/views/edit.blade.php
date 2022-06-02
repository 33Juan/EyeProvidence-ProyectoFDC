<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<script>
    
</script>
<body>
@extends('layouts.app')
@section('content')

     <!-- Contenido -->
     <div class="bg-6">
        <div class="glitch" data-text="EyeProvidence"></div>
    </div>

     <section class="container-fluid content">

         <!-- Botonoes -->
         <form action="{{route('fichajes.update', $picaje)}}" method="POST">
            @csrf
            @method('put')
            <div class="botonEntrar" style="justify-content:center;text-align: center;display: flex;padding: 10px;margin: 10px;">
            <h1>Salir ▶</h1>
                <!-- <input type="number" name="id" value="{{ $picaje->id}}">
                <br>
                <input type="text" name="name" value="{{ $picaje->name}}" placeholder="{{ $picaje->name}}">
                <br>
                <input type="date" name="fecha" value="{{ $picaje->Fecha}}" placeholder="{{ $picaje->Fecha}}">
                <br>
                <input type="time" name="entrada" value="{{ $picaje->Entrada}}" placeholder="{{ $picaje->Entrada}}">
                <br>
                <input type="time" name="salida" value="{{ $picaje->Salida}}" placeholder="{{ $picaje->Salida}}">
                <br>
                <input type="time" name="tiempo" value="{{ $picaje->Tiempo}}" placeholder="{{ $picaje->Tiempo}}"> -->

                <button type="submit" class="btn btn-primary">Salir</button><br>
            </div>               
         </form>

             <!-- Slide -->
             <br>
        <div id="myCarousel" class="carousel slide bg-inverse w-50 ms-auto me-auto" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/foto4.webp')}}" alt="First slide" height="550" width="400">
                <div class="carousel-caption">
                    <h3>First slide</h3>
                    <p>Control de entrada.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/foto2.webp')}}" alt="Second slide" height="550" width="400">
                <div class="carousel-caption">
                    <h3>Second slide</h3>
                    <p>Control de salida.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/foto3.webp')}}" alt="Third slide" height="550" width="400">
                <div class="carousel-caption">
                    <h3>Third slide</h3>
                    <p>Control del horario.</p>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
@endsection
</body>
</html>
