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
              {{ __('Registro') }}
          </h2>
      </x-slot>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">    
                 <form method="POST" action="{{route('Registro.store')}}">
                  @csrf

            <div class="mb-3">
              <label for="Nombre" class="form-label">Nombre</label>
              <input type="text" required class="form-control" id="Nombre"  aria-describedby="nameHelp"
                name="Nombre" placeholder="Nombre de Estudiante">
            </div>

            <div class="mb-3">
                <label for="Apellido" class="form-label">Apellido</label>
                <input type="text" required class="form-control" id="Apellido"  aria-describedby="nameHelp"
                  name="Apellido" placeholder="Apellido Estudiante">
              </div>

        <label for="Profesionales">Carreras Profesionales</label>
        <select class="form-select" id="Profesionales" name="Profesionales" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($registro as $registros)
            <option value="{{$registros->Carrera}}">{{$registros->Carrera}}</option>
            @endforeach
         </select>
            <div class="mt-3">
           <button type="submit" class="btn btn-primary">Save</button>
           <a href="{{route('dashboard')}}" class="btn btn-warning">Volver</a>

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