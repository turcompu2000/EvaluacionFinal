<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registro estudiantes</title>
  </head>
  <body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
  
          <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">    
                     <form >
                <div class="mb-3">
                  <label for="Nombre" class="form-label">BIENVENIDO AL INSTITUTO CECEP </label>
                </div>
                <div class="mt-3">
                  <label for="Nombre" class="form-label">Desarrollador: Mauricio vasquez villanueva </label>
                </div>
                <div class="mt-3">
                    <a href="{{ route('Registro.create') }}" class="btn btn-success">Ingresar</a>
                </div>
              </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    </x-app-layout>
      </body>
    </html>