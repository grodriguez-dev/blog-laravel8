@extends('layouts.app')
@section('content')
    <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
        <div class="text-center">
            <hi class="mb-5">{{__('Listado de proyectos')}}</h1>
            <br>
            <br>
            <a href="{{route('projects.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                {{__('Crear proyecto')}}
            </a>        
        </div>
    </div>
    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%;">
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td class="border px-4 py-2">{{$project->name}}</td>
                    <td class="border px-4 py-2">{{$project->description}}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('projects.edit', $project->id) }}" class="text-blue-400">Ver</a>
                        <a href="" class="text-red-400" onclick="event.preventDefault(); deleteForm('delete-{{$project->id}}')">Borrar</a>
                        <form style="display: none;" action="{{ route('projects.destroy', $project->id) }}" id="delete-{{$project->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if ($projects->count())
        <div class="mt-3">
            {{$projects->links()}}
        </div>
    @endif
      <script>
        function deleteForm(name) {
            let form = document.getElementById(name);
            form.submit();
        }
    </script>
@endsection