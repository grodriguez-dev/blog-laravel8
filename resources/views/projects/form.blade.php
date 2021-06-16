<div class="w-full max-w-lg">
    <div class="flex flex-wrap">
        <h1 class="mb-5">{{$title}}</h1>
    </div>
</div>
    
<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{$route}}">
    @csrf
    @isset($update)
        @method('PUT')
    @endisset

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Nombre
            </label>
            <input name="name" value="{{$project->name ?? ''}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Nombre" />
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Descripcion
            </label>
            <textarea class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="description" name="description">{{$project->description ?? ''}}</textarea>
        </div>
    </div>

    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{$textButton}}
            </button> 
        </div>
    </div>
  </form>
</div>